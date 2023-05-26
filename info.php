<!doctype html>
<html>
<head>
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EJ7G5Z8FXS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EJ7G5Z8FXS');
</script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
  
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'Alpha': ['Alpha', 'sans-serif'],
            'Formular': ['Formular', 'sans-serif'],
          },
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>

  <style>
@import url('https://fonts.cdnfonts.com/css/alpha');
@import url('https://fonts.cdnfonts.com/css/formular');
.hover-image-scale {
  overflow: hidden;
}
.hover-image-scale img {
  transition: 1s;
  display: block; 
}
.hover-image-scale img:hover {
  transform: scale(1.2); 
}
.sticky {
  position: sticky;
  top: 0;
  min-height: 2em;
  background: white;
}

#centerLayer {
    margin-left: 20%; 
    width: 15%; 
    margin-top: 22%;
    font-size: 40px;
    font-weight: 300;
}

#font-banner {
    font-size: 30px;
    font-weight: 500;
}

</style>
</head>
<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
    
<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];

   if (empty($name)) {
       $errors[] = 'Name is empty';
   }

   if (empty($email)) {
       $errors[] = 'Email is empty';
   }
   
    if (empty($phone)) {
       $errors[] = 'Phone is empty';
    }

   if (empty($message)) {
       $errors[] = 'Message is empty';
   }

   if (empty($errors)) {
       $toEmail = 'segal@rpgroup.lv';
       $emailSubject = 'RPGroup.lv | Кто то отправил Вам сообщение';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Имя: {$name}",'<br/>', "Почта: {$email}",'<br/>', "Телефон: {$phone}",'<br/>', "Сообщение:", $message];
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) 
           echo '<script>alert("Email sent successfully! We will answer you shortly.")</script>';
       } else {
           $errorMessage = 'Oops, something went wrong. Please try again later';
       }

   } else {

       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   }
?>

<!--Nav-->
<nav id="header" class="bg-white border-gray-200 sticky px-2 md:px-3 py-2 z-50" style="border-bottom: 1px solid rgba(0,0,0,.35);">
  <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3.5">
      <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-black text-xl " href="/">
         RPGROUP
      </a>
      <div class="flex items-center md:order-1">
          <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mega-menu" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
      </div>
      <div id="mega-menu" class="hidden justify-between items-center w-full text-sm md:flex md:w-auto md:order-1">
          <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
              <li>
                  <a href="/" class="font-Formular block py-2 text-[16px] pr-4 pl-3 text-rose-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-rose-800 md:p-0 dark:text-gray-400 md:dark:hover:text-rose-800" aria-current="page">Main</a>
              </li>
              <li>
                  <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="font-Formular flex text-[16px] justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-rose-800 md:p-0 dark:text-gray-400 md:dark:hover:text-rose-800 dark:hover:text-rose-800">
                      Furniture <svg aria-hidden="true" class="ml-1 w-5 h-5 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </button>
                  <div id="mega-menu-dropdown" class="grid hidden absolute z-10 grid-cols-2 w-auto text-sm bg-white rounded-lg border border-gray-100 shadow-md md:grid-cols-3">
                      <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                          <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                              <li>
                                  <a href="/business" class="font-Formular text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800">
                                      For business
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                          <ul class="space-y-4">
                              <li>
                                  <a href="/turnkey" class="font-Formular text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800">
                                      Turnkey
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                          <ul class="space-y-4">
                              <li>
                                  <a href="/doors" class="font-Formular text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800">
                                      Doors
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <!-- <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                        <ul class="space-y-4">
                            <li>
                                <a href="/turnkey" class="font-Formular text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800">
                                    Правила эксплуатации
                                </a>
                            </li>
                        </ul>
                    </div> -->
                  </div>
              </li>
              <li>
                  <a href="/services" class="font-Formular text-[16px] block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-rose-800 md:p-0 dark:text-gray-400 md:dark:hover:text-rose-800 dark:hover:text-rose-800">Services</a>
              </li>
              <li>
                  <a href="/en/contacts" class="font-Formular text-[16px] block py-2 pr-4 pl-3 text-rose-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-rose-800 md:p-0 dark:text-rose-800 md:dark:hover:text-rose-800 dark:hover:text-rose-800">Contact</a>
              </li>
              <li>
                <a href="/rules" class="font-Formular text-[16px] block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-rose-800 md:p-0 dark:text-gray-400 md:dark:hover:text-rose-800 dark:hover:text-rose-800">Operating Instructions</a>
              </li>

              <div id="mega-menu" class="justify-between items-center w-full text-sm md:flex md:w-auto md:order-1">
                <ul class="flex flex-col font-medium md:flex-row md:space-x-8 md:mt-0">
                    <li>
                        <button id="mega-menu-dropdown-button-2" data-dropdown-toggle="mega-menu-dropdown-2" class="flex text-[16px] justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-rose-800 md:p-0 dark:text-gray-400 md:dark:hover:text-rose-800 dark:hover:text-rose-800">
                            ENG <svg aria-hidden="true" class="ml-1 w-5 h-5 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div id="mega-menu-dropdown-2" class="grid hidden absolute z-10 grid-cols-1 w-auto text-sm bg-white rounded-lg border border-gray-100 shadow-md md:grid-cols-1">
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                    <li>
                                      <a href="/lv/contacts" class="text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800">
                                            LV
                                     </a>                              
                                   </li>
                                   <li>
                                    <a href="/ru/contacts" class="text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800">
                                          RU
                                   </a>                              
                                 </li>
                                 <li>
                                  <a href="/de/contacts" class="text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800">
                                        DE
                                 </a>                              
                               </li>
                               <li>
                                <a href="/fr/contacts" class="text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800">
                                      FR
                               </a>                              
                             </li>
                             <!-- <li>
                              <a href="#" class="text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800">
                                    FIN
                             </a>                              
                           </li> -->
                        </ul>
                </div>          
          </ul>
      </div>
  </div>
</nav>

  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800">

    <div class="relative overflow-hidden bg-no-repeat bg-cover"
      style="background-position: 50%; background-image: url('/img/info.jpg'); height: 300px;">  <!--https://media.admagazine.ru/photos/61408180d02a8b12ffb3d6fd/master/w_1600,c_limit/RIVERSIDE_gallery_14.jp-->
      <!--https://mdbootstrap.com/img/new/textures/full/284.jpg-->
    </div>
    <div class="container text-gray-800 px-4 md:px-12 md:ml-20">
      <div class="block rounded-lg shadow-lg py-10 md:py-12 px-2 md:px-6 "
        style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px); -webkit-backdrop-filter: blur(30px);">
        <div class="flex flex-wrap">
          <div class="grow-0 shrink-0 basis-auto w-full xl:w-5/12 px-3 lg:px-6 mb-12 xl:mb-0">
            <form method="post" id="contact-form">
                <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
              <div class="form-group mb-6">
                <input type="text" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name"
                  placeholder="Name" name="name">
              </div>
              <div class="form-group mb-6">
                <input type="email" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email"
                  placeholder="E-mail" name="email">
              </div>
              <div class="form-group mb-6">
                <input type="text" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="phone"
                  placeholder="Phone" name="phone">
              </div>
              <div class="form-group mb-6">
                <textarea class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
              " id="message" rows="3" placeholder="Message" name="message"></textarea>
              </div>
              <button type="submit" class="
              w-full
              px-6
              py-2.5
              bg-[#D0B084]
              text-white
              font-medium
              text-xs
              leading-tight
              uppercase
              rounded
              shadow-md
              hover:bg-blue-700 hover:shadow-lg
              focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
              active:bg-blue-800 active:shadow-lg
              transition
              duration-150
              ease-in-out">Send</button>
            </form>
          </div>
          <div class="grow-0 shrink-0 basis-auto w-full xl:w-7/12">
            <div class="flex flex-wrap ">
              <div class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                <div class="flex items-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-[#D0B084] rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <!-- <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headset" class="w-5 text-white"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                          d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z">
                        </path> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="10" r="3"/><path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z"/></svg>
                      </svg>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">Address</p>
                    <p class="text-gray-500">Tvaikoņu iela 5</p>
                    <p class="text-gray-500">LV-1007, Rīga, Latvia</p>
                  </div>
                </div>
              </div>
              <div class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                <div class="flex items-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-[#D0B084] rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <!-- <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign"
                        class="w-3 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512">
                        <path fill="currentColor"
                          d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z">
                        </path> -->
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug" class="w-5 text-white"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                          d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">Turnkey interiors</p>
                    <p class="text-gray-500">+371 29224123</p>
                    <p class="text-gray-500">+371 22336214</p>
                    <p class="text-gray-500">segal@rpgroup.lv</p>
                  </div>
                </div>
              </div>
              <div class="mb-12 md:mb-0 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                <div class="flex align-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-[#D0B084] rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="newspaper"
                        class="w-5 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor"
                          d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">Furniture</p>
                    <p class="text-gray-500">+371 29277617</p>
                    <p class="text-gray-500">+371 22336314</p>
                    <p class="text-gray-500">segal@rpgroup.lv</p>
                  </div>
                </div>
              </div>
              <div class="grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                <div class="flex align-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-[#D0B084] rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug" class="w-5 text-white"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                          d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">Services</p>
                    <p class="text-gray-500">+371 22336321</p>
                    <p class="text-gray-500">+371 29277617</p>
                    <p class="text-gray-500">kontrol@rpgroup.lv</p>
                  </div>
                </div>
              </div>
              <div class="map-responsive" style="width: 100%;">
              <iframe width="100%" height="1%" class=" mt-6 inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.0614433494197!2d24.072927716197235!3d56.964879980894835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecff02ed13b25%3A0x223d32fcb6becc63!2sTvaiko%C5%86u%20iela%205%2C%20Kurzemes%20rajons%2C%20R%C4%ABga%2C%20LV-1007!5e0!3m2!1slv!2slv!4v1671890032257!5m2!1slv!2slv"></iframe>
              <!-- <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(R.P.%20Group%20SIA)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe> -->
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<script>
   const constraints = {
       name: {
           presence: { allowEmpty: false }
       },
       email: {
           presence: { allowEmpty: false },
           email: true
       },
       phone: {
           presence: { allowEmpty: false },
           phone: true
       },
       message: {
           presence: { allowEmpty: false }
       }
   };

   const form = document.getElementById('contact-form');

   form.addEventListener('submit', function (event) {
     const formValues = {
         name: form.elements.name.value,
         email: form.elements.email.value,
         phone: form.elements.phone.value,
         message: form.elements.message.value
     };

     const errors = validate(formValues, constraints);

     if (errors) {
       event.preventDefault();
       const errorMessage = Object
           .values(errors)
           .map(function (fieldValues) { return fieldValues.join(', ')})
           .join("\n");

       alert(errorMessage);
     }
   }, false);
</script>


<style>
.map-responsive{
    overflow:hidden;
    padding-bottom: 30%;
    position:relative;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height: 90%;
    width:100%;
    position:absolute;
}
</style>

  </section>
  <!-- Section: Design Block -->

    
    <footer class="mt-auto w-full py-4 px-4 sm:px-6 lg:px-8 mx-auto bg-gray-100">
      <div class="bg-gray-100">
        <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center justify-center text-gray-900">
            <img class="w-2/3 h-2/3" src="/img/logo.png" alt="Image Description">
          </a>
          <p class="text-sm text-gray-500 sm:mt-0 mt-4">© 2022 RPGroup — All Rights Reserved.</p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </footer>
    

</body>
</html>