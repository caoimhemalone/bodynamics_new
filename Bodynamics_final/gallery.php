<?php include("header.php");?>

<style type="text/css">
    section {
        margin-top: 6em;
        margin-bottom: 3em;
    }
    .project-media img {
        width: 100%;
        margin-top: 1em;
    }
    .caoimhe a{
        color: #a9e20e;
    }

    .caoimhe span {
        padding: 2em;
        background-color: #b0b0b0;
        color: #343a40;
        display: block;
        width: 40%;
        text-align: center;
    }

    .caoimhe .card-icon {
        font-size: 2.2em;
    } 

    .caoimhe .photographer-card {
        margin-bottom: 1em;
    }

    .caoimhe img {
        border-radius: 50%;
        width: 20%;
        margin-top: 1em;
    }

    @media only screen and (max-width: 991px){
        .caoimhe span {
            width: 100%;
        }

        .caoimhe img {
            width: 30%;
        }
    }
</style>
<section class="gallery">
    <div class="container">
        <div class="project-media row">
            <div class="col-md-4">
                <img data-src="gallery/bd_10.jpg" alt="Bodynamics Gym">
            </div>   
        
            <div class="col-md-4">
                <img data-src="gallery/bd_25.jpg" alt="Bodynamics Gym">
            </div>
             <div class="col-md-4">
                <img data-src="gallery/bd_4.jpg" alt="Bodynamics Gym">
            </div>
        </div> 

        <div class="project-media row">
            <div class="col-md-6">
                <img data-src="gallery/bd_18.jpg" alt="Bodynamics Gym">
                <img data-src="gallery/bd_21.jpg" alt="Bodynamics Gym">
            </div>
            <div class="col-md-6">
                <img data-src="gallery/bd_15.jpg" alt="Bodynamics Gym">
                <img data-src="gallery/bd_5.jpg" alt="Bodynamics Gym">
            </div>

             <div class="col-md-6">
                <img data-src="gallery/bd_19.jpg" alt="Bodynamics Gym">
                <img data-src="gallery/bd_11.jpg" alt="Bodynamics Gym">
            </div>
            <div class="col-md-6">
                <img data-src="gallery/bd_23.jpg" alt="Bodynamics Gym">
                <img data-src="gallery/bd_7.jpg" alt="Bodynamics Gym">
            </div>
        </div>
        <div class="project-media row">              
            <div class="col-md-4">
                <img data-src="gallery/bd_12.jpg" alt="Bodynamics Gym">
            </div>
            <div class="col-md-4">
                <img data-src="gallery/bd_1.jpg" alt="Bodynamics Gym">
            </div>
            <div class="col-md-4">
                <img data-src="gallery/bd_6.jpg" alt="Bodynamics Gym"> 
            </div>
        </div> 
        <div class="project-media row">
             <div class="col-md-6">
                <img data-src="gallery/bd_16.jpg" alt="Bodynamics Gym">
                <img data-src="gallery/bd_22.jpg" alt="Bodynamics Gym">
            </div>
            <div class="col-md-6">
                <img data-src="gallery/bd_9.jpg" alt="Bodynamics Gym">
                <img data-src="gallery/bd_13.jpg" alt="Bodynamics Gym">
            </div>
     
            <div class="col-md-4">                    
                <img data-src="gallery/bd_3.jpg" alt="Bodynamics Gym">
            </div>
            <div class="col-md-4">
                <img data-src="gallery/bd_17.jpg" alt="Bodynamics Gym">
            </div>
            <div class="col-md-4">
                <img data-src="gallery/bd_2.jpg" alt="Bodynamics Gym">
            </div>
            <div class="col-md-4">
                <img data-src="gallery/bd_14.jpg" alt="Bodynamics Gym">
            </div>
            <div class="col-md-4">
                <img data-src="gallery/bd_20.jpg" alt="Bodynamics Gym">
            </div>
            <div class="col-md-4">
                <img data-src="gallery/bd_8.jpg" alt="Bodynamics Gym">
            </div>
            <div class="col-md-12">
                <img data-src="gallery/bd_24.jpg" alt="Bodynamics Gym">
            </div>
        </div>    
    </div>
</section>

<section class="caoimhe">
    <div class="container">
        <span>
            <div class="row">
                <div class="col-md-12 photographer-card">
                    <ion-icon class="card-icon" name="camera"></ion-icon></br>photos by <a href="https://www.instagram.com/caoimhemalone" target="_blank">Caoimhe Malone</a></br>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="https://www.key-vah.com" target="_blank"><img src="me.jpg" alt="caoimhe malone" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-6">
                    <ion-icon class="card-icon" name="logo-instagram"></ion-icon></br><a href="https://www.instagram.com/caoimhemalone" target="_blank">@caoimhemalone</a>
                </div>
                <div class="col-md-6 col-6">
                    <ion-icon class="card-icon" name="code-working"></ion-icon></br>
                    <a href="https://www.key-vah.com" target="_blank">key-vah.com</a>
                </div>
            </div>
        </span>
    </div>
</section>

<?php include("footer.php");?>