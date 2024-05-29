<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Weekly Focus</title>
    <link href="{{ asset('css/app.css') }}?v={{ time() }}" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="header-left">
            <h3 class="ml-5 fw-500">PLATINUMSPHERE</h3>
            <img class="img-sm" src="https://iconape.com/wp-content/png_logo_vector/sphere.png">
        </div>
        <div class="header-right">
            <h3 class="mr-5 fw-500">ALI</h3>
        </div>
    </div>

    <div class="side-nav">
        <div class="nav-profile">
            <p class="menu-header"><strong> PROFILE </strong></p>
            <p><a class="side-nav-link" href="#">PERSONAL</a></p>
            <p><a class="side-nav-link" href="#">LIST USER</a></p>
        </div>
        <div class="nav-expert-domain">
            <p class="menu-header"><strong> EXPERT DOMAIN </strong></p>
            <p><a class="side-nav-link" href="../NewExpertForm">NEW EXPERT</a></p>
            <p><a class="side-nav-link" href="../ViewOwnExpertList">LIST OWN EXPERT</a></p>
            <p><a class="side-nav-link" href="../ViewAllExpertList">LIST ALL EXPERT</a></p>
            <p><a class="side-nav-link" href="../ViewReportOfExpert">REPORT</a></p>
        </div>
        <div class="nav-expert-domain">
            <p class="menu-header"><strong> PUBLICATION </strong></p>
            <p><a class="side-nav-link" href="#">NEW PUBLICATION</a></p> 
            <p><a class="side-nav-link" href="#">LIST OWN PUBLICATION</a></p>
            <p><a class="side-nav-link" href="#">LIST ALL PUBLICATION</a></p>
        </div>
        <div class="nav-progress-monitor">
            <p class="menu-header"><strong> PROGRESS MONITORING </strong></p>
            <p><a class="side-nav-link" href="../CRMPprofile">CRMP PROFILE</a> </p>
            <p><a class="side-nav-link" href="../ManagePerformanceHome">MANAGE PERFORMANCE</a></p>
            <p><a class="side-nav-link" href="../Report">REPORT</a></p>
        </div>

        <button type="button" name="logout" id="logout" class="btn btn-logout btn-lg"> LOG OUT </button>
    </div>

    <div class="content">
        <h2 class="page-title">Weekly Focus</h2>
        <div class="weekly-focus-section">
            <button type="button" class="btn btn-edit">EDIT</button>
            <div class="blocks-container">
                <div class="block">
                    <h3 class="block-title">FOCUS BLOCK</h3>
                    <p>ISNIN: SI DAN WIP CHAPTER 1</p>
                    <p>SELASA: SI DAN WIP CHAPTER 2</p>
                    <p>RABU: SI DAN WIP CHAPTER 3</p>
                    <p>KHAMIS: SI DAN WIP CHAPTER 4</p>
                    <p>JUMAAT: CHAPTER 6 AND DD</p>
                    <p>SABTU: SI DAN WIP CHAPTER 5</p>
                </div>
                <div class="block">
                    <h3 class="block-title">ADMIN BLOCK</h3>
                    <p>ISNIN: MARKING ASSESSMENT</p>
                    <p>SELASA: MARKING ASSESSMENT</p>
                    <p>RABU: MARKING ASSESSMENT</p>
                    <p>KHAMIS: MARKING ASSESSMENT</p>
                    <p>JUMAAT: MARKING ASSESSMENT</p>
                </div>
                <div class="block">
                    <h3 class="block-title">SOCIAL BLOCK</h3>
                    <p>DENTAL</p>
                    <p>VOICE CHAT PLATINUM</p>
                    <p>BACA POST PLATINUM DI FB</p>
                    <p>BACA TELEGRAM RPC PLATINUM</p>
                    <p>TELEFON AYAH DI KAMPUNG</p>
                    <p>UPDATE LINKEDIN</p>
                    <p>POST STATUS SOCMED</p>
                </div>
                <div class="block">
                    <h3 class="block-title">RECOVERY BLOCK</h3>
                    <p>BACA AL-QURAN 5 MUKA SURAT SETIAP HARI</p>
                    <p>BACA 3 KUL SEBELUM TIDUR</p>
                    <p>SELAWAT 100X SEHARI</p>
                    <p>SOLAT TAHAJUD</p>
                    <p>SEDEKAH MINIMUM RM10 SEMINGGU</p>
                </div>
            </div>
            <div class="comment">
                <h3 class="comment-title">COMMENT</h3>
                <p>ZAINAL: KEEP UP THE GOOD JOB, MAKE SURE TO ALWAYS UPDATE YOUR WEEKLY FOCUS</p>
            </div>
        </div>
    </div>
</body>
</html>



