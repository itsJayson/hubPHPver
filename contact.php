<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="jayson p!!" />
    <title>Hanap Usap Build</title>
    <link rel="shortcut icon" type="x-icon" href="./HUB imgs/HUB LOGO up icon.png" />
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bungee+Tint&family=Dosis:wght@200..800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,423;1,423&family=New+Amsterdam&family=Roboto:wght@700&display=swap"
        rel="stylesheet" />
    <!--icons-->
    <script src="https://kit.fontawesome.com/f606e8e763.js" crossorigin="anonymous"></script>
    <!--frameworks-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="./styles.css" />
</head>
<!--navbar-->
<nav></nav>

<section class="contact-section">
    <div class="contact-intro">
        <h2 class="contact-title">Contact Us</h2>
        <p class="contact-description">
            Fill out the form below and we'll get back to you as soon as possible.
        </p>
    </div>

    <form class="contact-form" action="https://api.web3forms.com/submit" method="POST" onsubmit="return validate()">
        <input type="hidden" name="access_key" value="d38ab6c6-f742-4fd6-b710-df447df49f91" />
        <input type="hidden" name="subject" value="Message from customers" />
        <input type="hidden" name="from_name" value="HUB" />

        <div class="form-group-container">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input id="name" name="name" class="form-input" placeholder="Your name" type="text" required />
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" class="form-input" placeholder="Your email" type="email" required />
            </div>
            <div class="form-group">
                <label for="phone" class="form-label">Phone</label>
                <input id="phone" name="phone" class="form-input" placeholder="+1 (234) 5678901" pattern="[0-9]{11}"
                    type="tel" />
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-textarea" id="message" name="message" placeholder="Your message"></textarea>
            </div>
            <div class="h-captcha" data-captcha="true"></div>
        </div>

        <button class="form-submit" type="submit">Send Message</button>
    </form>
</section>

<!--scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="./script.js"></script>
<script src="https://web3forms.com/client/script.js" async defer></script>

</html>