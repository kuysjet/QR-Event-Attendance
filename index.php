<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ACLC Event QR Scanner</title>

  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

  <script src="./node_modules/html5-qrcode/html5-qrcode.min.js"></script>
</head>

<body>

  <div class="container-lg">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <!-- qr scanner -->
        <div id="reader"></div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>

  <div id="result" class="text-center"></div>

  <script>
    const scanner = new Html5QrcodeScanner('reader', {
      qrbox: {
        width: 250,
        height: 250,
      },
      fps: 20,
    });

    // Flag to track whether a QR code has been successfully captured
    let qrCodeCaptured = false;

    scanner.render(success, error);

    function success(result) {
      if (!qrCodeCaptured) {
        qrCodeCaptured = true;

        // Send the captured data to a PHP script
        sendDataToPHP(result);

        // Display success message
        document.getElementById('result').innerHTML = `
        <h1>${result}</h1>
      `;
        // Reset the scanner and allow capturing another QR code
        scanner.reset();
        qrCodeCaptured = false;

        // Render the scanner again after a short delay
        setTimeout(function () {
          scanner.render(success, error);
        }, 1000); // Adjust the delay as needed
      }

      // scanner.clear();
      // document.getElementById('reader').remove();
    }

    function error(err) {
      console.error(err);
    }

    function sendDataToPHP(data) {
      // Create a FormData object to send data to PHP
      const formData = new FormData();
      formData.append('qrcode_data', data);

      // Make an HTTP request to the PHP script
      fetch('sendQrData.php', {
        method: 'POST',
        body: formData,
      })
        .then(response => response.text())
        .then(responseData => {
          // Handle the response from the PHP script if needed
          console.log(responseData);

          // Allow capturing another QR code
          qrCodeCaptured = false;
        })
        .catch(error => {
          console.error(error);
        });
    }
  </script>
</body>

</html>