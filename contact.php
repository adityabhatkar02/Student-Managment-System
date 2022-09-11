<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>contact us </title>
    <link rel="stylesheet" href="contact1.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
</head>

<body>
  <?php include 'menu.php';?>
  <!---->
    <div class="container">
        <h1>Contact us</h1>
        <p>
            we would love to respond to your quries and help you succed.<br>
            Feel to get in touch with us
        </p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Sent your request</h3>
                <form>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" placeholder="XTZ">
                        </div>
                        <div class="input-group">
                            <label>phone</label>
                            <input type="text" placeholder="0000000">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>subject</label>
                            <input type="text" placeholder="subject">
                        </div>
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" placeholder="XTZ@mail.com">
                        </div>
                    </div>
                    <label>Message</label>
                    <textarea rows="5" placeholder="Your Message"></textarea>
                    <button type="submit">Send</button>
                </form>
            </div>
            <div class="contact-right">
                <h3>Reach us</h3>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>contactus@expample</td>

                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>0251-255947<br>9988545421</td>

                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>block no 154<br>
                            veer sambhaji road<br>
                            near station
                        </td>

                    </tr>
                </table>
            </div>
        </div>
    </div>
    <footer><p class="p-3 bg-dark text-white">@State Public University</p>
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>