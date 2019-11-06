<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web developer based in Sheffield.">

    <title>Dillon Constantine</title>

    <!--<base href="https://dillonconstantine.com/">-->

    <link rel="canonical" href="https://dillonconstantine.com/">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42763119-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-42763119-1');
    </script>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.1.0/css/line-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans|Source+Code+Pro&display=swap" rel="stylesheet">
    <style>
        .sans-serif {
            font-family: 'Open Sans', sans-serif;
        }

        .serif {
            font-family: "Merriweather", serif;
        }

        .monospace {
            font-family: "Source Code Pro", serif;
        }

        .bg-work {
            background: #f8f8f8;
        }
    </style>
</head>
<body>
    <main>
        <div class="container mx-auto text-center px-8">
            <div class="mt-16 text-4xl serif">
                <p class="mb-2">
                    Hello, I'm Dillon!
                </p>
                <p>
                    I'm an aspiring web developer based in Sheffield.
                </p>
            </div>
            <div class="mx-auto mt-8 w-3/5 sans-serif">
                <p>
                    I've been a hobbyist web developer for over a decade and have now decided I want to pursue web development as a career. I'm looking to find work at a company where I can continue to grow as a person and as a developer.
                </p>
            </div>
        </div>
        <div class="bg-work pt-8 px-8 pb-12 mt-12">
            <div class="container mx-auto">
                <div class="flex flex-col items-center mt-4 lg:flex-row">
                    <div class="flex items-center lg:w-1/2">
                        <a href="https://smssashwindowspecialist.co.uk/" target="_blank">
                            <img class="shadow-xl rounded" src="img/sms-sash-window-specialist.png">
                        </a>
                    </div>
                    <div class="flex flex-col justify-center px-2 mt-8 lg:w-1/2 lg:pl-16 lg:mt-0">
                        <h2 class="font-bold text-2xl serif">SMS Sash Window Specialist<h2>
                            <div class="mt-4 sans-serif">
                                <p>
                                    A local business wanted a presence online so I built them a website to provide details of the services they offer and a point of contact.
                                </p>
                                <p class="mt-4">
                                    The site is built to be fully responsive when viewed on any device.
                                </p>
                                <p class="mt-4">
                                    The gallery features an image viewer which allows prospective customers to view prior work in closer detail.
                                </p>
                                <p class="mt-4">
                                    reCAPTCHA v3 is used on the contact page to help prevent spam in the least intrusive way possible.
                                </p>
                                <p class="mt-4 text-sm monospace">
                                    Software: Laravel, VueJS, Tailwind
                                </p>
                            </div>
                    </div>
                </div>
                <div class="flex flex flex-col items-center mt-12 lg:flex-row">
                    <div class="flex items-center lg:w-1/2">
                        <img class="shadow-xl rounded" src="img/skynet.png">
                    </div>
                    <div class="flex flex-col justify-center px-2 mt-8 lg:w-1/2 lg:pl-16 lg:mt-0">
                        <h2 class="font-bold text-2xl serif">Skynet <i class="la la-robot"></i> (WIP)<h2>
                        <div class="mt-4 sans-serif">
                            <p>
                                A personal project I embarked on for a mixture of fun, challenge and development of my skills.
                            </p>
                            <p class="mt-4">
                                The site aims to be able to automate betting strategies on a betting exchange such as Smarkets.
                            </p>
                            <p class="mt-4">
                                Selenium WebDriver is used to interact with Smarkets in the background which then passes the data to Pusher and feeds it to my frontend via WebSockets in realtime.
                            </p>
                            <p class="mt-4">
                                This realtime feed of data can then be used to implement functionality to automate betting strategies via filters and parameters.
                            </p>
                            <p class="mt-4">
                                This project isn't currently publicly hosted.
                            </p>
                            <p class="mt-4 text-sm monospace">
                                Software: Laravel, VueJS, Bootstrap, Selenium WebDriver, Pusher
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="p-4 text-center text-sm monospace bg-gray-900 text-white">
        <p>
            &#169; <?= date('Y') ?> Dillon Constantine | &#x63;&#x6f;&#x6e;&#x74;&#x61;&#x63;&#x74;&#x40;&#x64;&#x69;&#x6c;&#x6c;&#x6f;&#x6e;&#x63;&#x6f;&#x6e;&#x73;&#x74;&#x61;&#x6e;&#x74;&#x69;&#x6e;&#x65;&#x2e;&#x63;&#x6f;&#x6d;
        </p>
        <p class="mt-2">
            <a href="https://github.com/dillonconstantine/" target="_blank"><i class="la la-github text-3xl"></i><a>
        </p>
    </footer>
</body>
</html>
