<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web developer based in Sheffield.">

    <title>Dillon Constantine</title>

    <base href="https://dillonconstantine.com/">

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
        <div class="text-right pt-4 pr-4">
            <a class="hover:text-blue-500" href="https://github.com/dillonconstantine/" target="_blank"><i class="la la-github text-3xl"></i></a>
            <a class="hover:text-blue-500" href="https://linkedin.com/in/dillonconstantine" target="_blank"><i class="la la-linkedin text-3xl"></i></a>
        </div>
        <div class="container mx-auto text-center px-8">
            <div class="mt-12 text-4xl serif">
                <p class="mb-2">
                    Hello, I'm Dillon!
                </p>
                <p>
                    I'm a web developer based in Sheffield.
                </p>
            </div>
            <div class="mx-auto mt-8 w-3/5 sans-serif">
                <p>
                    I previously studied Web Systems Design at Sheffield Hallam University and I now want to pursue professional web development as a career. I'm looking to find work at a company where I can continue to grow as a person and as a developer.
                </p>
            </div>
        </div>
        <div class="bg-work pt-8 px-8 pb-12 mt-12">
            <div class="container mx-auto">
                <div class="flex flex flex-col items-center mt-12 lg:flex-row">
                    <div class="flex items-center lg:w-1/2">
                        <a href="https://book-api.dillonconstantine.com/" target="_blank">
                            <img class="shadow-xl rounded" src="img/book-api.png" alt="Book API Screenshot">
                        </a>
                    </div>
                    <div class="flex flex-col justify-center px-2 mt-8 lg:w-1/2 lg:pl-16 lg:mt-0">
                        <h2 class="font-bold text-2xl serif">Book API</h2>
                        <div class="mt-4 sans-serif">
                            <p>
                                Book API is my most recent project built with the Laravel framework and makes use of the Laravel Passport package to provide a full OAuth2 server implementation.
                            </p>
                            <p class="mt-4">
                                It makes use of a number of Laravel features such as form requests, API resources and custom middleware.
                            </p>
                            <p class="mt-4">
                                It follows the JSON:API specification for building APIs in JSON, and was built as a project to demonstrate my knowledge of RESTful APIs.
                            </p>
                            <div class="text-sm monospace mt-4">
                                <p>
                                    Link: <a class="underline hover:text-blue-500" href="https://book-api.dillonconstantine.com/" target="_blank">https://book-api.dillonconstantine.com/</a>
                                </p>
                                <p class="mt-2">
                                    Source: <a class="underline hover:text-blue-500" href="https://github.com/dillonconstantine/book-api" target="_blank">dillonconstantine/book-api</a>
                                </p>
                                <p class="mt-2">
                                    Software: Laravel
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex flex-col items-center mt-12 lg:flex-row">
                    <div class="flex items-center lg:w-1/2">
                        <img class="shadow-xl rounded" src="img/exchange-bot.png" alt="Exchange Bot Screenshot">
                    </div>
                    <div class="flex flex-col justify-center px-2 mt-8 lg:w-1/2 lg:pl-16 lg:mt-0">
                        <h2 class="font-bold text-2xl serif">Exchange Bot</h2>
                        <div class="mt-4 sans-serif">
                            <p>
                                This is a personal project that I am currently working on that I embarked on for a mixture of fun, challenge and development of my skills.
                            </p>
                            <p class="mt-4">
                                It aims to be able to automate trading strategies on a sports exchange such as Smarkets.
                            </p>
                            <p class="mt-4">
                                Selenium is used to interact with Smarkets in the background which is then broadcasted to my frontend in realtime.
                            </p>
                            <p class="mt-4">
                                Using this realtime feed of data, my next steps are to implement the functionality to be able to partake in trades based on certain parameters and conditions.
                            </p>
                            <p class="mt-4">
                                This project isn't currently publicly hosted.
                            </p>
                            <div class="text-sm monospace mt-4">
                                <p>
                                    Source: <a class="underline hover:text-blue-500" href="https://github.com/dillonconstantine/exchange-bot" target="_blank">dillonconstantine/exchange-bot</a>
                                </p>
                                <p class="mt-2">
                                    Software: Laravel, VueJS, jQuery, Bootstrap, MySQL, Selenium
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center mt-4 lg:flex-row">
                    <div class="flex items-center lg:w-1/2">
                        <a href="https://smssashwindowspecialist.co.uk/" target="_blank">
                            <img class="shadow-xl rounded" src="img/sms-sash-window-specialist.png" alt="SMS Sash Window Specialist Screenshot">
                        </a>
                    </div>
                    <div class="flex flex-col justify-center px-2 mt-8 lg:w-1/2 lg:pl-16 lg:mt-0">
                        <h2 class="font-bold text-2xl serif">SMS Sash Window Specialist</h2>
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
                            <div class="text-sm monospace mt-4">
                                <p>
                                    Link: <a class="underline hover:text-blue-500" href="https://smssashwindowspecialist.co.uk/" target="_blank">https://smssashwindowspecialist.co.uk/</a>
                                </p>
                                <p class="mt-2">
                                    Source: <a class="underline hover:text-blue-500" href="https://github.com/dillonconstantine/sms-sash-window-specialist" target="_blank">dillonconstantine/sms-sash-window-specialist</a>
                                </p>
                                <p class="mt-2">
                                    Software: Laravel, VueJS, Tailwind
                                </p>
                            </div>
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
    </footer>
</body>
</html>
