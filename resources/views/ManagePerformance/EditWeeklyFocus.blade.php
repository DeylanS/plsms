<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Weekly Focus</title>
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
            <p class="menu-header"><strong> PUBLICATION DATA </strong></p>
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
        <h2 class="page-title">Edit Weekly Focus</h2>
        <div class="weekly-focus-section">
            <form action="/saveWeeklyFocus" method="POST">
                <div class="blocks-container">
                    <div class="block">
                        <h3 class="block-title">FOCUS BLOCK</h3>
                        <textarea name="focus_block" rows="6" readonly>ISNIN: SI DAN WIP CHAPTER 1
SELASA: SI DAN WIP CHAPTER 2
RABU: SI DAN WIP CHAPTER 3
KHAMIS: SI DAN WIP CHAPTER 4
JUMAAT: CHAPTER 6 AND DD
SABTU: SI DAN WIP CHAPTER 5</textarea>
                    </div>
                    <div class="block">
                        <h3 class="block-title">ADMIN BLOCK</h3>
                        <textarea name="admin_block" rows="6" readonly>ISNIN: MARKING ASSESSMENT
SELASA: MARKING ASSESSMENT
RABU: MARKING ASSESSMENT
KHAMIS: MARKING ASSESSMENT
JUMAAT: MARKING ASSESSMENT</textarea>
                    </div>
                    <div class="block">
                        <h3 class="block-title">SOCIAL BLOCK</h3>
                        <textarea name="social_block" rows="6" readonly>DENTAL
VOICE CHAT PLATINUM
BACA POST PLATINUM DI FB
BACA TELEGRAM RPC PLATINUM
TELEFON AYAH DI KAMPUNG
UPDATE LINKEDIN
POST STATUS SOCMED</textarea>
                    </div>
                    <div class="block">
                        <h3 class="block-title">RECOVERY BLOCK</h3>
                        <textarea name="recovery_block" rows="6" readonly>BACA AL-QURAN 5 MUKA SURAT SETIAP HARI
BACA 3 KUL SEBELUM TIDUR
SELAWAT 100X SEHARI
SOLAT TAHAJUD
SEDEKAH MINIMUM RM10 SEMINGGU</textarea>
                    </div>
                </div>
                <div class="comment">
                    <h3 class="comment-title">COMMENT</h3>
                    <textarea name="comment" rows="3" readonly>ZAINAL: KEEP UP THE GOOD JOB, MAKE SURE TO ALWAYS UPDATE YOUR WEEKLY FOCUS</textarea>
                </div>
                <button type="submit" class="btn btn-save">SAVE</button>
            </form>
        </div>
    </div>
</body>
</html>

