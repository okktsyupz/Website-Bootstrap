<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="wifi" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M6.55 12.192c3.017-3.256 7.883-3.256 10.9 0a.75.75 0 1 0 1.1-1.02c-3.61-3.896-9.49-3.896-13.1 0a.75.75 0 1 0 1.1 1.02" />
      <path fill="currentColor"
        d="M8.55 14.35c1.912-2.064 4.987-2.064 6.9 0a.75.75 0 1 0 1.1-1.019c-2.506-2.705-6.594-2.705-9.1 0a.75.75 0 1 0 1.1 1.02" />
      <path fill="currentColor"
        d="M10.55 16.51c.808-.872 2.092-.872 2.9 0a.75.75 0 1 0 1.1-1.02c-1.401-1.513-3.699-1.513-5.1 0a.75.75 0 1 0 1.1 1.02" />
      <path fill="currentColor" fill-rule="evenodd"
        d="M12 1.25c-.708 0-1.351.203-2.05.542c-.674.328-1.454.812-2.427 1.416L5.456 4.491c-.92.572-1.659 1.03-2.227 1.465c-.589.45-1.041.91-1.368 1.507c-.326.595-.472 1.229-.543 1.978c-.068.725-.068 1.613-.068 2.726v1.613c0 1.904 0 3.407.153 4.582c.156 1.205.486 2.178 1.23 2.947c.747.773 1.697 1.119 2.875 1.282c1.14.159 2.598.159 4.434.159h4.116c1.836 0 3.294 0 4.434-.159c1.177-.163 2.128-.509 2.876-1.282c.743-.769 1.073-1.742 1.23-2.947c.152-1.175.152-2.678.152-4.582v-1.613c0-1.113 0-2-.068-2.726c-.07-.75-.217-1.383-.543-1.978c-.327-.597-.78-1.056-1.368-1.507c-.568-.436-1.306-.893-2.227-1.465l-2.067-1.283c-.973-.604-1.753-1.088-2.428-1.416c-.697-.34-1.34-.542-2.049-.542M8.28 4.504c1.015-.63 1.73-1.072 2.327-1.363c.581-.283.993-.391 1.393-.391s.812.108 1.393.391c.598.29 1.312.733 2.327 1.363l2 1.241c.961.597 1.636 1.016 2.14 1.402c.489.375.77.684.963 1.036c.193.353.306.766.365 1.398c.061.648.062 1.465.062 2.623v1.521c0 1.97-.002 3.376-.14 4.443c-.136 1.048-.393 1.656-.82 2.099c-.425.439-1.003.7-2.004.839c-1.026.142-2.379.144-4.286.144h-4c-1.908 0-3.26-.002-4.286-.144c-1.001-.14-1.579-.4-2.003-.84c-.428-.442-.685-1.05-.82-2.098c-.14-1.067-.141-2.472-.141-4.443v-1.521c0-1.158 0-1.975.062-2.623c.059-.632.172-1.045.365-1.398c.193-.352.474-.661.964-1.036c.503-.386 1.178-.805 2.139-1.402z"
        clip-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="shipping-fast" viewBox="0 0 32 32">
      <path fill="currentColor" d="M0 6v2h19v15h-6.156c-.446-1.719-1.992-3-3.844-3c-1.852 0-3.398 1.281-3.844 3H4v-5H2v7h3.156c.446 1.719 1.992 3 3.844 3c1.852 0 3.398-1.281 3.844-3h8.312c.446 1.719 1.992 3 3.844 3c1.852 0 3.398-1.281 3.844-3H32v-8.156l-.063-.157l-2-6L29.72 10H21V6zm1 4v2h9v-2zm20 2h7.281L30 17.125V23h-1.156c-.446-1.719-1.992-3-3.844-3c-1.852 0-3.398 1.281-3.844 3H21zM2 14v2h6v-2zm7 8c1.117 0 2 .883 2 2s-.883 2-2 2s-2-.883-2-2s.883-2 2-2zm16 0c1.117 0 2 .883 2 2s-.883 2-2 2s-2-.883-2-2s.883-2 2-2z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="shopping-cart" viewBox="0 0 32 32">
      <path fill="currentColor" d="M5 7c-.55 0-1 .45-1 1s.45 1 1 1h2.219l2.625 10.5c.222.89 1.02 1.5 1.937 1.5H23.25c.902 0 1.668-.598 1.906-1.469L27.75 10H11l.5 2h13.656l-1.906 7H11.781L9.156 8.5A1.983 1.983 0 0 0 7.22 7zm17 14c-1.645 0-3 1.355-3 3s1.355 3 3 3s3-1.355 3-3s-1.355-3-3-3zm-9 0c-1.645 0-3 1.355-3 3s1.355 3 3 3s3-1.355 3-3s-1.355-3-3-3zm0 2c.563 0 1 .438 1 1c0 .563-.438 1-1 1c-.563 0-1-.438-1-1c0-.563.438-1 1-1zm9 0c.563 0 1 .438 1 1c0 .563-.438 1-1 1c-.563 0-1-.438-1-1c0-.563.438-1 1-1z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="gift" viewBox="0 0 32 32">
      <path fill="currentColor" d="M12 5c-1.645 0-3 1.355-3 3c0 .352.074.684.188 1H4v6h1v13h22V15h1V9h-5.188A2.95 2.95 0 0 0 23 8c0-1.645-1.355-3-3-3c-1.75 0-2.938 1.328-3.719 2.438c-.105.148-.187.292-.281.437c-.094-.145-.176-.29-.281-.438C14.938 6.329 13.75 5 12 5zm0 2c.625 0 1.438.672 2.063 1.563c.152.218.128.23.25.437H12c-.566 0-1-.434-1-1c0-.566.434-1 1-1zm8 0c.566 0 1 .434 1 1c0 .566-.434 1-1 1h-2.313c.122-.207.098-.219.25-.438C18.563 7.673 19.375 7 20 7zM6 11h20v2h-9v-1h-2v1H6zm1 4h18v11h-8V16h-2v10H7z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="return" viewBox="0 0 32 32">
      <path fill="currentColor" d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13h-2c0 6.086-4.914 11-11 11S5 22.086 5 16S9.914 5 16 5c3.875 0 7.262 1.984 9.219 5H20v2h8V4h-2v3.719C23.617 4.844 20.02 3 16 3z" />
    </symbol>
    <symbol id="arrow-right" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M13.47 5.47a.75.75 0 0 1 1.06 0l6 6a.75.75 0 0 1 0 1.06l-6 6a.75.75 0 1 1-1.06-1.06l4.72-4.72H4a.75.75 0 0 1 0-1.5h14.19l-4.72-4.72a.75.75 0 0 1 0-1.06"
        clip-rule="evenodd" />
    </symbol>
    <symbol id="arrow-left" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M10.53 5.47a.75.75 0 0 1 0 1.06l-4.72 4.72H20a.75.75 0 0 1 0 1.5H5.81l4.72 4.72a.75.75 0 1 1-1.06 1.06l-6-6a.75.75 0 0 1 0-1.06l6-6a.75.75 0 0 1 1.06 0"
        clip-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="send" viewBox="0 0 24 24">
      <g fill="none">
        <path
          d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
        <path fill="currentColor"
          d="m21.433 4.861l-6 15.5a1 1 0 0 1-1.624.362l-3.382-3.235l-2.074 2.073a.5.5 0 0 1-.853-.354v-4.519L2.309 9.723a1 1 0 0 1 .442-1.691l17.5-4.5a1 1 0 0 1 1.181 1.329ZM19 6.001L8.032 13.152l1.735 1.66L19 6Z" />
      </g>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="quote" viewBox="0 0 16 16">
      <path fill="currentColor"
        d="M7 7v7H0V6.9c0-4.8 4.5-5.4 4.5-5.4l.6 1.4s-2 .3-2.4 1.9C2.3 6 3.1 7 3.1 7zm9 0v7H9V6.9c0-4.8 4.5-5.4 4.5-5.4l.6 1.4s-2 .3-2.4 1.9c-.4 1.2.4 2.2.4 2.2z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="play" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M9.5 15.584V8.416a.5.5 0 0 1 .77-.42l5.576 3.583a.5.5 0 0 1 0 .842l-5.576 3.584a.5.5 0 0 1-.77-.42Z" />
      <path fill="currentColor"
        d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m11-9.5A9.5 9.5 0 0 0 2.5 12a9.5 9.5 0 0 0 9.5 9.5a9.5 9.5 0 0 0 9.5-9.5A9.5 9.5 0 0 0 12 2.5" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
      <path
        d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
    </symbol>
    <symbol id="location" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M3.25 10.143C3.25 5.244 7.155 1.25 12 1.25c4.845 0 8.75 3.994 8.75 8.893c0 2.365-.674 4.905-1.866 7.099c-1.19 2.191-2.928 4.095-5.103 5.112a4.2 4.2 0 0 1-3.562 0c-2.175-1.017-3.913-2.92-5.103-5.112c-1.192-2.194-1.866-4.734-1.866-7.099M12 2.75c-3.992 0-7.25 3.297-7.25 7.393c0 2.097.603 4.392 1.684 6.383c1.082 1.993 2.612 3.624 4.42 4.469a2.7 2.7 0 0 0 2.291 0c1.809-.845 3.339-2.476 4.421-4.469c1.081-1.99 1.684-4.286 1.684-6.383c0-4.096-3.258-7.393-7.25-7.393m0 5a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5M8.25 10a3.75 3.75 0 1 1 7.5 0a3.75 3.75 0 0 1-7.5 0"
        clip-rule="evenodd" />
    </symbol>
    <symbol id="phone" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M6.007 3.407c1.68-1.68 4.516-1.552 5.686.544l.649 1.163c.763 1.368.438 3.095-.68 4.227a.63.63 0 0 0-.104.337c-.013.256.078.849.997 1.767c.918.918 1.51 1.01 1.767.997a.63.63 0 0 0 .337-.104c1.131-1.118 2.859-1.443 4.227-.68l1.163.65c2.096 1.17 2.224 4.004.544 5.685c-.899.898-2.093 1.697-3.498 1.75c-2.08.079-5.536-.459-8.958-3.88c-3.421-3.422-3.959-6.877-3.88-8.958c.053-1.405.852-2.6 1.75-3.498m4.376 1.275c-.6-1.074-2.21-1.32-3.315-.214c-.775.775-1.28 1.63-1.312 2.493c-.066 1.736.363 4.762 3.442 7.84c3.08 3.08 6.105 3.509 7.84 3.443c.863-.033 1.72-.537 2.494-1.312c1.106-1.106.86-2.716-.214-3.315l-1.163-.649c-.723-.403-1.74-.266-2.453.448c-.07.07-.516.486-1.307.524c-.81.04-1.791-.324-2.9-1.434c-1.111-1.11-1.475-2.091-1.435-2.902c.038-.791.455-1.237.524-1.307c.714-.713.851-1.729.448-2.452z"
        clip-rule="evenodd" />
    </symbol>
    <symbol id="email" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M9.944 3.25h4.112c1.838 0 3.294 0 4.433.153c1.172.158 2.121.49 2.87 1.238c.748.749 1.08 1.698 1.238 2.87c.153 1.14.153 2.595.153 4.433v.112c0 1.838 0 3.294-.153 4.433c-.158 1.172-.49 2.121-1.238 2.87c-.749.748-1.698 1.08-2.87 1.238c-1.14.153-2.595.153-4.433.153H9.944c-1.838 0-3.294 0-4.433-.153c-1.172-.158-2.121-.49-2.87-1.238c-.748-.749-1.08-1.698-1.238-2.87c-.153-1.14-.153-2.595-.153-4.433v-.112c0-1.838 0-3.294.153-4.433c.158-1.172.49-2.121 1.238-2.87c.749-.748 1.698-1.08 2.87-1.238c1.14-.153 2.595-.153 4.433-.153M5.71 4.89c-1.006.135-1.586.389-2.01.812c-.422.423-.676 1.003-.811 2.009c-.138 1.028-.14 2.382-.14 4.289c0 1.907.002 3.262.14 4.29c.135 1.005.389 1.585.812 2.008c.423.423 1.003.677 2.009.812c1.028.138 2.382.14 4.289.14h4c1.907 0 3.262-.002 4.29-.14c1.005-.135 1.585-.389 2.008-.812c.423-.423.677-1.003.812-2.009c.138-1.028.14-2.382.14-4.289c0-1.907-.002-3.261-.14-4.29c-.135-1.005-.389-1.585-.812-2.008c-.423-.423-1.003-.677-2.009-.812c-1.027-.138-2.382-.14-4.289-.14h-4c-1.907 0-3.261.002-4.29.14m-.287 2.63a.75.75 0 0 1 1.056-.096L8.64 9.223c.933.777 1.58 1.315 2.128 1.667c.529.34.888.455 1.233.455c.345 0 .704-.114 1.233-.455c.547-.352 1.195-.89 2.128-1.667l2.159-1.8a.75.75 0 1 1 .96 1.153l-2.196 1.83c-.887.74-1.605 1.338-2.24 1.746c-.66.425-1.303.693-2.044.693c-.741 0-1.384-.269-2.045-.693c-.634-.408-1.352-1.007-2.239-1.745L5.52 8.577a.75.75 0 0 1-.096-1.057"
        clip-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="star" viewBox="0 0 512 512">
      <path fill="currentColor"
        d="M394 480a16 16 0 0 1-9.39-3L256 383.76L127.39 477a16 16 0 0 1-24.55-18.08L153 310.35L23 221.2a16 16 0 0 1 9-29.2h160.38l48.4-148.95a16 16 0 0 1 30.44 0l48.4 149H480a16 16 0 0 1 9.05 29.2L359 310.35l50.13 148.53A16 16 0 0 1 394 480" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="play-circle" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="m9.5 16.5l7-4.5l-7-4.5zM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12q0-3.35-2.325-5.675T12 4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20m0-8" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
      <path fill="currentColor"
        d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 512 512">
      <path fill="currentColor"
        d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32Zm-273.3 373.43h-64.18V205.88h64.18ZM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43c0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43Zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44c-17.74 0-28.24 12-32.91 23.69c-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44c42.13 0 74 27.77 74 87.64Z" />
    </symbol>
    <symbol id="search" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M11.5 2.75a8.75 8.75 0 1 0 0 17.5a8.75 8.75 0 0 0 0-17.5M1.25 11.5c0-5.66 4.59-10.25 10.25-10.25S21.75 5.84 21.75 11.5c0 2.56-.939 4.902-2.491 6.698l3.271 3.272a.75.75 0 1 1-1.06 1.06l-3.272-3.271A10.21 10.21 0 0 1 11.5 21.75c-5.66 0-10.25-4.59-10.25-10.25"
        clip-rule="evenodd" />
    </symbol>
  </svg>
  
    <!-- navigasi -->
      <nav id="primary-header" class="navbar navbar-expand-lg py-2 bg-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container-fluid padding-side">
          <div class="d-flex justify-content-between align-items-center w-100">
            <a class="navbar-brand">
              <img src="img/Black_Flower_Florist_Personal_Logo-removebg-preview.png" class="logo">
            </a>
            <button class="navbar-toggler border-0 d-flex d-lg-none order-3 p-2 shadow-none" type="button"
              data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false">
              <svg class="navbar-icon" width="60" height="60">
                <use xlink:href="#navbar-icon"></use>
              </svg>
            </button>
            <div class="header-bottom offcanvas offcanvas-end " id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
              <div class="offcanvas-header px-4 pb-0">
                <button type="button" class="btn-close btn-close-black mt-2" data-bs-dismiss="offcanvas"
                  aria-label="Close" data-bs-target="#bdNavbar"></button>
              </div>
              <div class="offcanvas-body align-items-center justify-content-center">
                <div class="search d-block d-lg-none m-5">
                  <form class=" position-relative">
                    <input type="text" class="form-control bg-secondary border-0 rounded-5 px-4 py-2"
                      placeholder="Search...">
                    <a href="#" class="position-absolute top-50 end-0 translate-middle-y p-1 me-3">
                      <svg class="" width="20" height="20">
                        <use xlink:href="#search"></use>
                      </svg>
                    </a>
                  </form>
                </div>
                <ul class="navbar-nav align-items-center mb-2 mb-lg-0">
                  <li class="nav-item px-3">
                    <a class="nav-link active p-0" aria-current="page" href="#home">Home</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link p-0" href="#about">About</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link p-0" href="#categories">Categories</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link p-0" href="#services">Services</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link p-0" href="#gallery">Gallery</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link p-0" href="#testimoni">Testimonials</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link p-0" href="#contact">Contact</a>
                  </li>
                  <ul class="navbar-nav navbar-right">
                    <!-- modal login -->
                    <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#idLogin">Login</a></li>
                  </ul>
                </ul>
              </div>
            </div>
            <div class="search d-lg-block d-none">
              <form class=" position-relative">
                <input type="text" class="form-control bg-secondary border-0 rounded-5 px-4 py-2" placeholder="Search...">
                <a href="#" class="position-absolute top-50 end-0 translate-middle-y p-1 me-3">
                  <svg class="" width="20" height="20">
                    <use xlink:href="#search"></use>
                  </svg>
                </a>
              </form>
            </div>
          </div>
        </div>
      </nav>  
    <!-- akhir nav -->
    
    <!-- Jumbotron -->
    <section id="home">
      <div class="container-fluid padding-side">
        <div class="d-flex rounded-5"
          style="background-image: url(img/flowerr.jpg); background-size: cover; background-repeat: no-repeat; height: 85vh; background-position: center;">
          <div class="row align-items-center m-auto pt-5 px-4 px-lg-0">
            <div class="text-start col-md-6 col-lg-5 col-xl-6 offset-lg-1">
              <h2 class="display-1 fw-normal">De'Floria brings happiness in every flower.</h2>
              <a href="#categories" class="btn btn-arrow btn-primary mt-3">
                <span>Order Here <svg width="18" height="18">
                    <use xlink:href="#arrow-right"></use>
                  </svg></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end Jumbotron -->
  
    <!-- +one -->
    <section id="company-services" class="padding-large">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex align-items-center">
              <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3">
                <svg class="shipping-fast">
                  <use xlink:href="#shipping-fast" />
                </svg>
              </div>
              <div class="icon-box-content ps-3">
                <h3 class="card-title text-uppercase text-dark">Quick delivery</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex align-items-center">
              <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3">
                <svg class="shopping-cart">
                  <use xlink:href="#shopping-cart" />
                </svg>
              </div>
              <div class="icon-box-content ps-3">
                <h3 class="card-title text-uppercase text-dark">Pick up in store</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex align-items-center">
              <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3">
                <svg class="gift">
                  <use xlink:href="#gift" />
                </svg>
              </div>
              <div class="icon-box-content ps-3">
                <h3 class="card-title text-uppercase text-dark">Special Packaging</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex align-items-center">
              <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3">
                <svg class="return">
                  <use xlink:href="#return" />
                </svg>
              </div>
              <div class="icon-box-content ps-3">
                <h3 class="card-title text-uppercase text-dark">Return & refund policy</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end +one -->

    <!-- Bagian About -->
     <div class="container-fluid pt-5 pb-5">
      <div class="container">
        <h2 class="display-3 text-center" id="about">About Us</h2>
        <p class="text-center mt-5">Our certified florist website offers a safe and secure shopping experience. With an easy ordering system and responsive customer service, we ensure every order is carefully processed. The existence of this certificate is a testament to our dedication to high standards of service, so you can have peace of mind when trusting us with your floral needs.</p>
        <div class="clearfix pt-5">
          <img src="img/Desain tanpa judul.jpg" class="col-md-6 float-md-end mb-3 crop-img" alt="" width="300" height="300">
          <p class="mt-3">Established in 2015, De' Floria has become a top choice for flower lovers in Viale dei Colli, Verona.</p>
          <p class="mt-3">Each of our bouquets is created with love and attention to detail. Trust us with your precious moments, and let the beauty of our flower bouquet add joy to every celebration!</p>
          <p class="mt-3">Whether it's a wedding, birthday, or simply an expression of affection, we're here to help you find the right flowers for every occasion.</p>
          <p class="mt-3">Join us in celebrating each of your precious moments with a special floral touch!</p>
          <a href=""><i class="fa-brands fa-instagram fa-2x"></i></a>
          <a href=""><i class="fa-solid fa-globe fa-2x"></i>
          <a href=""><i class="fa-brands fa-square-x-twitter fa-2x"></i></a>
        </div>
      </div>
     </div>
    <!-- Akhir bagian about -->

    <!-- Bagian Categories-->
    <div class="container-fluid action pt-5 pb-5">
      <div class="container text-center pt-3">
       <h2 class="display-3" id="categories"><b>Categories</b></h2>
       <p>From grand weddings to simple celebrations, our team of experts is ready to help you choose the perfect flower arrangement. Trust us with your special moments, and let the beauty of our flowers add happiness to every celebration!</p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card crop-img">
              <img src="img/daisy.jpg" class="card-img" width="600px" height="400px">
              <div class="card-body">
                <div class="card-title">Flower Bouqet</div>
                <p class="card-text">Discover the charm of nature in each of our flower bouquets. Made from handpicked fresh flowers,  creating a stunning harmony of color and fragrance.</p>
                <button type="button" class="btn btn-danger btn-md mt-3">Order Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img src="img/vasee.jpg" class="card-img" width="600px" height="400px">
              <div class="card-body">
                <div class="card-title">Design Vase</div>
                <p class="card-text">Made from quality materials, these pots are available in various sizes and colors, perfect for enhancing the interior or exterior. Add a fresh and lively feel to every corner of your home!</p>
                <button type="button" class="btn btn-danger btn-md mt-3">Order Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img src="img/premium.jpg" class="card-img" width="600px" height="400px">
              <div class="card-body">
                <div class="card-title">Premium Collection</div>
                <p class="card-text">Enjoy beauty at its finest with our Premium Flower Collection. This collection is designed for special moments and events. Convey your feelings with unforgettable elegance.</p>
                <button type="button" class="btn btn-danger btn-md mt-3">Order Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img src="img/crocheet.jpg" class="card-img" width="600px" height="400px">
              <div class="card-body">
                <div class="card-title">Flower Design Crochet</div>
                <p class="card-text">With a wide selection of customizable designs and colors, we also offer custom services, so you can have crochet flowers that fully reflect your style and personality.</p>
                <button type="button" class="btn btn-danger btn-md mt-3">Order Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img src="img/brochee.jpg" class="card-img" width="600px" height="400px">
              <div class="card-body">
                <div class="card-title">Flower Broche</div>
                <p class="card-text">Designed with charming details, this broche brings a touch of elegance and uniqueness to your outfit or bag. Add a stylish floral touch and make the moment unforgettable!</p>
                <button type="button" class="btn btn-danger btn-md mt-3">Order Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img src="img/event.jpg" class="card-img" width="600px" height="400px">
              <div class="card-body">
                <div class="card-title">Flower for Events </div>
                <p class="card-text">Make every detail of your event perfect with our unique and elegant floral decorations. Order now and create a mesmerizing atmosphere for every guest.</p>
                <button type="button" class="btn btn-danger btn-md mt-3">Order Now</button>
              </div>
            </div>
          </div>
        </div>
    <!-- Akhir Bagian Categories-->

    <!-- service2 -->
    <section id="services" class="padding-medium">
      <div class="container-fluid padding-side pt-5" data-aos="fade-up">
        <h3 class="display-3 text-center fw-normal col-lg-4 offset-lg-4">Our services</h3>
        <div class="row mt-5">
          <div class="col-md-6 col-xl-4">
            <div class="service mb-4 text-center rounded-4 p-5">
              <div class="position-relative">
                <span class="lingkaran"><i class="fa-solid fa-hand-holding-heart fa-4x"></i></span>
              </div>
              <h4 class="display-6 fw-normal my-3">Flower</h4>
              <p>Each of our bouquets is created with love and attention to detail. We are committed to using the highest quality fresh flowers and offer friendly customer service to ensure a pleasant shopping experience. Trust us with your precious moments, and let the beauty of our flower bouquet add joy to every celebration!</p>
              <a href="index.html" class="btn btn-arrow">
                <span class="text-decoration-underline">Read More<svg width="18" height="18">
                    <use xlink:href="#arrow-right"></use>
                  </svg></span>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="service mb-4 text-center rounded-4 p-5">
              <div class="position-relative">
                <span class="lingkaran"><i class="fa-solid fa-palette fa-4x"></i></span>
              </div>
              <h4 class="display-6 fw-normal my-3">Design Vase</h4>
              <p>Give your home a fresh and artistic feel with our exclusive design vases. Each piece is crafted with high-quality materials and unique design touches, creating a work of art that can enhance the interior of your home. Find a variety of options to suit your style, from the elegant to the bold and colorful.</p>
              <a href="index.html" class="btn btn-arrow">
                <span class="text-decoration-underline">Read More<svg width="18" height="18">
                    <use xlink:href="#arrow-right"></use>
                  </svg></span>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="service mb-4 text-center rounded-4 p-5">
              <div class="position-relative">
                <span class="lingkaran"><i class="fa-solid fa-gift fa-4x"></i></span>
              </div>
              <h4 class="display-6 fw-normal my-3">Birthday Gift</h4>
              <p>Celebrate the blissful moment of a birthday with our finest flower arrangements. Flowers are not just a gift, but a symbol of love and warmth. Let our flower arrangements convey your message in the most beautiful way-whether it's a thank you or simply a reminder that they mean a lot to you.</p>
              <a href="index.html" class="btn btn-arrow">
                <span class="text-decoration-underline">Read More<svg width="18" height="18">
                    <use xlink:href="#arrow-right"></use>
                  </svg></span>
              </a>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- service2 -->

    <!-- gallery -->
    <section id="gallery" data-aos="fade-up">
      <h3 class="display-3 fw-normal text-center">our gallery</h3>
      <p class="text-center col-lg-4 offset-lg-4 mb-5">Explore our florist shop that offers not only stunning flower arrangements, but also elegant event decoration services, fun flower workshops, and unforgettable birthday surprises. Whatever your special moment is, trust us to make it even more beautiful with a touch of meaningful flowers.</p>
      <div class="container my-5">
        <div class="row">
          <!-- Gallery Item 1 -->
          <div class="col-md-4 mb-4">
            <figure class="gallery-item">
              <img src="img/flower3.jpg" class="img-fluid" alt="Gambar 1">
              <figcaption>
                <p>Our Florist Shop</p>
              </figcaption>
            </figure>
          </div>

          <!-- Gallery Item 2 -->
          <div class="col-md-4 mb-4">
            <figure class="gallery-item">
              <img src="img/flower1.jpg" class="img-fluid" alt="Gambar 2">
              <figcaption>
                <p> ˗ˋˏ ♡ ˎˊ˗</p>
              </figcaption>
            </figure>
          </div>

          <!-- Gallery Item 3 -->
          <div class="col-md-4 mb-4">
            <figure class="gallery-item">
              <img src="img/flower5.jpg" class="img-fluid" alt="Gambar 3">
              <figcaption>
                <p>Our Florist Branches</p>
              </figcaption>
            </figure>
          </div>

          <!-- Gallery Item 4 -->
          <div class="col-md-4 mb-4">
            <figure class="gallery-item">
              <img src="img/flower4.jpg" class="img-fluid" alt="Gambar 4">
              <figcaption>
                <p>Flower Exhibition</p>
              </figcaption>
            </figure>
          </div>

          <!-- Gallery Item 5 -->
          <div class="col-md-4 mb-4">
            <figure class="gallery-item">
              <img src="img/sungho.jpeg" class="img-fluid" alt="Gambar 5">
              <figcaption>
                <p>𓏲 ࣪₊♡𓂃</p>
              </figcaption>
            </figure>
          </div>

          <!-- Gallery Item 6 -->
          <div class="col-md-4 mb-4">
            <figure class="gallery-item">
              <img src="img/flower6.jpg" class="img-fluid" alt="Gambar 6">
              <figcaption>
                <p>Florist Class & Workshop</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div> <!-- End Container -->
    </section>
    <!-- gallery -->

    <!-- testiomoni -->
    <section id="testimoni" class="testi">
      <div class="container">
        <div class="title my-5">
          <h1 class="text-center text-white text-uppercase p-5">Testimonials Costumers</h1>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
             <div class="row">
              <div class="col-md-4 mb-3">
                <div class="card text-center">
                  <img class="card-img-top" src="img/rei.jpeg" alt="">
                  <div class="card-body">
                    <h4> Rei IVE <br>
                    <span>Kpop Idol | De'Floria Trainee</span>
                    </h4>
                    <p class="card-text">“Studying at De'Floria is an amazing experience! Professional instructors inspiring me to learning in the world of florists. Thank you, De'Floria!” </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card text-center">
                  <img class="card-img-top" src="img/download.jpeg" alt="">
                  <div class="card-body">
                    <h4> Kim Jiwon <br>
                    <span>Actrees</span>
                    </h4>
                    <p class="card-text">“I am very satisfied with the choice of flowers and the creativity of the team in arranging every corner of our wedding venue.”</p>
                  </div>
                </div></div>
              <div class="col-md-4 mb-3">
                <div class="card text-center">
                  <img class="card-img-top" src="img/winter.jpeg" alt="">
                  <div class="card-body">
                    <h4> Winter <br>
                    <span>Kpop Idol</span>
                    </h4>
                    <p class="card-text">“We are amaze with De'Floria's service and results. All the arrangements we ordered really enhanced our photoshoot.”</p>
                  </div>
                </div>
              </div>
             </div>
            </div>
            <!-- cr 2 -->
            <div class="carousel-item">
             <div class="row">
              <div class="col-md-4 mb-3">
                <div class="card text-center">
                  <img class="card-img-top" src="img/leehan.jpeg" alt="">
                  <div class="card-body">
                    <h4> Kim Leehan <br>
                    <span>Models</span>
                    </h4>
                    <p class="card-text">“With patient guidance, I managed to arrange a beautiful bouquet for the woman I love. Thank you so much De'Floria.”</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card text-center">
                  <img class="card-img-top" src="img/jts.jpeg" alt="">
                  <div class="card-body">
                    <h4> Jaehyun & Taesan <br>
                    <span>Kpop Idol</span>
                    </h4>
                    <p class="card-text">“The bouquet for my best friend Taesan's graduation was beautiful. The moment became more special. Thank you for the best service!”</p>
                  </div>
                </div></div>
              <div class="col-md-4 mb-3">
                <div class="card text-center">
                  <img class="p card-img-top" src="img/sungho.jpeg" alt="">
                  <div class="card-body">
                    <h4> Park Sungho <br>
                    <span>Models | De'Floria BA</span>
                    </h4>
                    <p class="card-text">“I am proud to be part of De'Floria as a brand ambassador. De'Floria brings meaning to every flower arrangement, thank you for this trust!”</p>
                  </div>
                </div>
              </div>
             </div>
            </div>
            <!-- end cr 2 -->

            <!-- cr 3 -->
            <div class="carousel-item">
             <div class="row">
              <div class="col-md-4 mb-3">
                <div class="card text-center">
                  <img class="card-img-top" src="img/rei.jpeg" alt="">
                  <div class="card-body">
                    <h4> Rei IVE <br>
                    <span>A Kpop Idol</span>
                    </h4>
                    <p class="card-text">“Studying at De'Floria is an amazing experience! Professional instructors inspiring me to learning in the world of florists. Thank you, De'Floria!”</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card text-center">
                  <img class="card-img-top" src="img/leehan.jpeg" alt="">
                  <div class="card-body">
                    <h4> Kim Leehan <br>
                    <span>Models</span>
                    </h4>
                    <p class="card-text">“With patient guidance, I managed to arrange a beautiful bouquet for the woman I love. Thank you so much De'Floria.”</p>
                  </div>
                </div></div>
              <div class="col-md-4 mb-3">
                <div class="card text-center">
                  <img class="card-img-top" src="img/download.jpeg" alt="">
                  <div class="card-body">
                    <h4> Kim Jiwon <br>
                    <span>Actrees</span>
                    </h4>
                    <p class="card-text">“I am very satisfied with the choice of flowers and the creativity of the team in arranging every corner of our wedding venue.”</p>
                  </div>
                </div>
              </div>
             </div>
            </div>
            <!-- end cr3 -->
          </div>
        </div>
      </div>
    </section>
    <!-- testiomoni -->

    
    <!-- Bagian  -->
     <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="service">Cooperate With</h2>
        <p>Here are some of the companies that work with our florist shop.</p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4 text-center staff">
            <img src="img/piwboutique.png" alt="" class="rounded-circle mb-3">
            <h4>Piwboutique</h4>
            <p>Boutique Dress</p>
            <p>
              <a href="" class="social"><i class="fa-brands fa-instagram"></i></a>
              <a href="" class="social"><i class="fa-solid fa-globe"></i></a>
              <a href="" class="social"><i class="fa-brands fa-square-x-twitter"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center staff">
            <img src="img/greenhouse.png" alt="" class="rounded-circle mb-3">
            <h4>Greenhouse</h4>
            <p>Flower Class & Workshop</p>
            <p>
              <a href="" class="social"><i class="fa-brands fa-instagram"></i></a>
              <a href="" class="social"><i class="fa-solid fa-globe"></i></a>
              <a href="" class="social"><i class="fa-brands fa-square-x-twitter"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center staff">
            <img src="img/magnifique.png" alt="" class="rounded-circle mb-3">
            <h4>Magnifique</h4>
            <p>Wedding Planner</p>
            <p>
              <a href="" class="social"><i class="fa-brands fa-instagram"></i></a>
              <a href="" class="social"><i class="fa-solid fa-globe"></i></a>
              <a href="" class="social"><i class="fa-brands fa-square-x-twitter"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center staff">
            <img src="img/bs.png" alt="" class="rounded-circle mb-3">
            <h4>Brigitte Schwartz</h4>
            <p>Brigitte Schwartz | Event Organizer</p>
            <p>
              <a href="" class="social"><i class="fa-brands fa-instagram"></i></a>
              <a href="" class="social"><i class="fa-solid fa-globe"></i></a>
              <a href="" class="social"><i class="fa-brands fa-square-x-twitter"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center staff">
            <img src="img/keithson.png" alt="" class="rounded-circle mb-3">
            <h4>Keithston And Partners</h4>
            <p>Home decoration | since 2006</p>
            <p>
              <a href="" class="social"><i class="fa-brands fa-instagram"></i></a>
              <a href="" class="social"><i class="fa-solid fa-globe"></i></a>
              <a href="" class="social"><i class="fa-brands fa-square-x-twitter"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center staff">
            <img src="img/larana.png" alt="" class="rounded-circle mb-3">
            <h4>Larana</h4>
            <p>Event Decoration</p>
            <p>
              <a href="" class="social"><i class="fa-brands fa-instagram"></i></a>
              <a href="" class="social"><i class="fa-solid fa-globe"></i></a>
              <a href="" class="social"><i class="fa-brands fa-square-x-twitter"></i></a>
            </p>
          </div>
        </div>
      </div>
     </div>
    <!-- Bagian -->

    <!-- modal -->
      <div id="idLogin" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Login Here</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Form login -->
              <form action="check-login.php" method="post">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="textright pt-2 pb-2">
                  <button class="btn btn-danger" type="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- modal -->

    <!-- footer -->
    <section id="contact">
      <div class="container-fluid padding-side padding-small pt-5 text-center" data-aos="fade-up">
        <footer class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <img src="img/Black Flower Florist Personal Logo.png" alt="logo-footer" class="img-fluid">
            <p class="mt-3">Our certified florist website offers a safe and secure shopping experience. We ensure every order is carefully processed.</p>
            <ul class="social-links d-flex flex-wrap list-unstyled mt-4 mb-0">
              <li>
                <a href="#">
                  <svg class="social me-4" width="20" height="20">
                    <use xlink:href="#facebook"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg class="social me-4" width="20" height="20">
                    <use xlink:href="#twitter"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg class="social me-4" width="20" height="20">
                    <use xlink:href="#linkedin"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg class="social me-4" width="20" height="20">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg class="social me-4" width="20" height="20">
                    <use xlink:href="#youtube"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 offset-lg-1 mb-4 mb-lg-0">
            <h4 class="display-6 fw-normal">Join Our Newsletter</h4>
            <p>Sign up to our newsletter to receive latest news.</p>
            <form class=" position-relative">
              <input type="text" class="form-control px-4 py-3 bg-transparent mb-3" placeholder="Your Name">
              <input type="email" class="form-control px-4 py-3 bg-transparent" placeholder="Your email">
              <div class="d-grid">
                <button href="#" class="btn btn-arrow btn-primary mt-3">
                  <span>Subscribe Now<svg width="18" height="18">
                      <use xlink:href="#arrow-right"></use>
                    </svg></span>
                </button>
              </div>
            </form>
          </div>
          <div class="col-md-6 col-lg-3 offset-lg-1 mb-4 mb-lg-0">
            <h4 class="display-6 fw-normal">Our Info</h4>
            <ul class="nav flex-column">
              <li class="location text-capitalize d-flex align-items-center">
                <svg class="color me-1" width="20" height="20">
                  <use xlink:href="#location"></use>
                </svg>De' Floria
              </li>
              <li class="text-capitalize ms-4">
                Via delle Rose
              </li>
              <li class="text-capitalize ms-4">
                Piazza Venezia, Italia
              </li>
              <li class="phone text-capitalize d-flex align-items-center mt-2">
                <svg class="color me-1" width="20" height="20">
                  <use xlink:href="#phone"></use>
                </svg>+666 333 9999
              </li>
              <li class="email text-capitalize d-flex align-items-center mt-2">
                <svg class="color me-1" width="20" height="20">
                  <use xlink:href="#email"></use>
                </svg>defloria@email.com
              </li>
            </ul>
          </div>
        </footer>
      </div>
      <hr class="text-black">
      <div class="container-fluid padding-side padding-small">
        <footer class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h4 class="display-6 fw-normal">Quick links</h4>
            <ul class="nav flex-column">
              <li class="nav-item"><a href="#home" class="p-0 "> Home </a></li>
              <li class="nav-item"><a href="#about" class="p-0 "> About us </a></li>
              <li class="nav-item"><a href="#categories" class="p-0 "> Categories </a></li>
              <li class="nav-item"><a href="#services" class="p-0 "> Our Service </a></li>
              <li class="nav-item"><a href="#contact" class="p-0 "> Contact us </a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 offset-lg-1 mb-4 mb-lg-0">
            <h4 class="display-6 fw-normal">Services</h4>
            <ul class="nav flex-column">
              <li class="nav-item"><a href="#" class="p-0 "> Flower Bouquet </a></li>
              <li class="nav-item"><a href="#" class="p-0 "> Design Vase </a></li>
              <li class="nav-item"><a href="#" class="p-0 "> Birthday Gift </a></li>
              <li class="nav-item"><a href="#" class="p-0 "> Event Decoration</a></li>
              <li class="nav-item"><a href="#" class="p-0 "> Workshop </a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 offset-lg-1 mb-4 mb-lg-0">
            <p class="m-0">© Copyright 2024 De' Floria. </p>
            <p>De'floria:<a href="https:/instagram.com/" class="text-decoration-underline"
                target="_blank">De'floria</a><br> Distributed By: <a href="https://instagram.com" class="text-decoration-underline"
              target="blank">Syifana</a></p>
          </div>
        </footer>
      </div>
    </section>
  
    
    <!-- footer -->
  
    <script src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>