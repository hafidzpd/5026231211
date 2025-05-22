<html>
<head>
    <title>CBM COPIER Linktree</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background: url('foto/logocbm.png') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            font-family: Arial, sans-serif;
            color: rgb(0, 0, 0);
        }

        .bg-blur {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('foto/logocbm.png') no-repeat center center fixed;
            background-size: cover;
            filter: blur(100px);
            z-index: -2;
        }

        
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(255, 255, 255, 0.8); /* putih semi-transparan */
            z-index: -1;
        }


        .content {
            text-align: center;
            padding: 60px 20px;
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
            object-fit: cover;
        }

        h4 {
            font-weight: bold;
        }

        .desc {
            margin-bottom: 30px;
            color: rgb(71, 71, 71)
        }

        .link-btn {
            position: relative;
            display: block;
            width: 100%;
            max-width: 600px;
            margin: 10px auto;
            padding: 22px 15px;
            font-size: 18px;
            border-radius: 10px;
            background: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
            text-decoration: none;
            font-weight: normal;
            transition: 0.2s;
            backdrop-filter: blur(5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .link-btn:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .link-icon {
            position: absolute; 
            left: 35px;
            top: 25%;
            transform: translate(-50%);
            width: 40px;
            height: 40px;
        }

        .link-text {
             display: inline-block;
        }

        .link-btn:visited,
        .link-btn:hover,
        .link-btn:focus,
        .join-linktree:visited,
        .join-linktree:hover,
        .link-btn:active {
            color: rgb(0, 0, 0);
            text-decoration: none;
        }

        .join-linktree {
            display: inline-block;
            padding: 1px 10px;
            border-radius: 999px;
            background: white;
            color: black;
            font-weight: 600;
            font-size: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
            margin-bottom: 10px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        .spacer {
            height: 100px;
        }



    </style>
</head>
<body>
    <div class="bg-blur"></div>
    <div class="content">
        <img src="foto/logocbm.png" alt="CBM Logo" class="profile-img">
        <h4>CBM COPIER</h4>
        <p class="desc">Sewa & Jual Unit Mesin Fotocopy serta menjual sparepart Mesin Fotocopy.</p>

        <a href="https://wa.me/6281282391370" class="link-btn" target="_blank">
            <img src="foto/whatsapp.jpeg" class="link-icon"> WhatsApp
        </a>
        <a href="http://www.sewafotocopy.co.id/" class="link-btn" target="_blank">
            <img src="foto/logocbm.png" class="link-icon"> Website
        </a>
        <a href="https://www.instagram.com/cv.citrabarumandiri?igsh=MWNycjFid3p3dGR1aw==" class="link-btn" target="_blank">
            <img src="foto/instagram.jpeg" class="link-icon"> Instagram
        </a>
        <a href="https://www.tiktok.com/@cv.citrabarumandiri?_t=8oe0u4grw1w&_r=1" class="link-btn" target="_blank">
            <img src="foto/tiktok.jpeg" class="link-icon"> TikTok
        </a>
        <a href="https://tokopedia.link/cbm-fire" class="link-btn" target="_blank">
            <img src="foto/tokopedia.jpeg" class="link-icon"> Tokopedia 1
        </a>
        <a href="https://www.facebook.com/share/ykgEhXDAR3NjM2qh/?mibextid=qi2Omg" class="link-btn" target="_blank">
            <img src="foto/facebook.jpeg" class="link-icon"> Facebook
        </a>
        <a href="http://www.youtube.com/@cvcitrabarumandiri" class="link-btn" target="_blank">
            <img src="foto/Youtube.jpeg" class="link-icon"> Tips & Trik Fotocopy
        </a>
        <a href="https://s.id/sewafotocopy" class="link-btn" target="_blank">
            <img src="foto/logocbm.png" class="link-icon"> Tentang kami & Testimoni
        </a>
    </div>
    <div class="join-linktree">
        <a class="join-linktree" href="https://linktr.ee/?utm_source=linktree&utm_medium=profile&utm_campaign=footer_logo_cta&utm_content=CBMCOPIER" target="_blank">
            ✴ Bergabung dengan CBMCOPIER di Linktree
        </a>
    </div>
    <div class="spacer"></div>

</body>
</html>
