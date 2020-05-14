<!DOCTYPE html>
 <?php 
    require "show-data.php"; 
    require "update-data2.php";
    

 ?>

<html>
	<head>
		<title>Profil Saya</title>
        <link rel="stylesheet" type="text/css" href="../portofolio/assets/CSS/profile.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
	<body>
        <nav>
            <div class="menu-mobile">
                <a href="#" onclick="showMenu()"> Menu </a>
            </div>

			<ul id="menu">
				<li> <a href="#"> HOME </a> </li>
				<li> <a href="#"> PRODUCTS </a> </li>
				<li> <a href="#"> GALLERY </a> </li>
				<li> <a href="blog.html"> BLOG </a> </li>
				<li> <a href="#"> MY INVENTORY </a> </li>
			</ul>
		</nav>

		<section id="box-profile">
			<div class="img-profile">
				 <!-- <div class="photo" style="background-image: url(E:\LIKO\Coding\Hactiv\Likoblogtest download.jpeg"></div> -->
				  <img src="http://localhost/portofolio/assets/img/download.jpeg" alt="Profil Saya"> 
			</div>

			<div class="description">
				<h1 id="pName"> <?php echo $nama; ?></h1>
				<p id="pRole"> <?php echo $role; ?></p>
				<a href="#input-form" class="button bg-blue" onclick="editForm()">Edit</a>
				<a href="#" class="button border-green">Resume</a>
			</div>

			<div class="information">
				<div class="data">
					<p class="field">Availability</p>
					<p id="pAvailability"class="text-gray"><?php echo $availability; ?></p>
				</div>
				<div class="data">
					<p class="field">age</p>
					<p id="pAge"class="text-gray"><?php echo $age; ?></p>
				</div>
				<div class="data">
					<p class="field">Lokasi</p>
					<p id="pLocation"class="text-gray"><?php echo $location; ?></p>
				</div>
				<div class="data">
					<p class="field">Pengalaman</p>
					<p id="pExperience"class="text-gray"><?php echo $experience; ?></p>
				</div>
				<div class="data">
					<p class="field">Email</p>
					<p id="pEmail"class="text-gray"><?php echo $email; ?></p>
				</div>
			</div>
        </section>
        <!-- GET & POST 
        get untuk menampilkan 
        post overright (edit) data dan tampilkan data  -->
       
			<section id="input-form">
                <form method:"POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
                    <div class="form">
						<label> Id User</label>
						<input id="inpIdUser" type="number" name="id" value="<?php echo $id; ?>">
					</div>
					<div class="form">
						<label> Name </label>
						<input id="inpName" type="text" name="nama">
					</div>
					<div class="form">
						<label> Role </label>
						<input id="inpRole" type="text" name="role">
					</div>
					<div class="form">
						<label> Availability </label>
						<input id="inpAvailability" type="text" name="availability">
					</div>
					<div class="form">
						<label> Age </label>
						<input id="inpAge" type="text" name="age">
					</div>
					<div class="form">
						<label> Lokasi </label>
						<input id="inpLokasi" type="text" name="lokasi">
					</div>
					<div class="form">
						<label> Years Experience </label>
						<input id="inpYears" type="number" name="years">
					</div>
					<div class="form">
						<label> Email </label>
						<input id="inpEmail" type="email" name="email">
					</div>
					<div class="form">
						<input onclick="" type="submit" name="submit" value="SUBMIT" class="bg-green">
					</div>
				 </form> 
            </section>
            
            <script>
                let formMenu = document.getElementById("input-form");
                formMenu.style.display="none";

                function editForm()
                {
                    if(formMenu.style.display ==="none")
                    {
                        formMenu.style.display = "block";
                    }else{
                        formMenu.style.display ="none";
                    }
                }


                let name = document.getElementById("pName").innerHTML;
                let role = document.getElementById("pRole").innerHTML;
                let available = document.getElementById("pAvailability").innerHTML;
                let age = document.getElementById("pAge").innerHTML;
                let lokasi= document.getElementById("pLocation").innerHTML;
                let Experience = document.getElementById("pExperience").innerHTML;
                let email = document.getElementById("pEmail").innerHTML;


                document.getElementById("inpName").value=name;
                document.getElementById("inpRole").value=role;
                document.getElementById("inpAvailability").value=available;
                document.getElementById("inpAge").value=age;
                document.getElementById("inpLokasi").value=lokasi;
                document.getElementById("inpYears").value=Experience;
                document.getElementById("inpEmail").value=email;


                // function simpanForm()
                // {
                //     formMenu.style.display = "none";

                //     let name = document.getElementById("inpName").value;
                //     let role = document.getElementById("inpRole").value;
                //     let available = document.getElementById("inpAvailability").value;
                //     let age = document.getElementById("inpAge").value;
                //     let Lokasi = document.getElementById("inpLokasi").value;
                //     let Experience = document.getElementById("inpYears").value;
                //     let email = document.getElementById("inpEmail").value;

                //     document.getElementById("pName").innerHTML = name;
                //     document.getElementById("pRole").innerText = role;
                //     document.getElementById("pAvailability").innerText = available;
                //     document.getElementById("pAge").innerText = age;
                //     document.getElementById("pLocation").innerText = Lokasi;
                //     document.getElementById("pExperience").innerText = Experience;
                //     document.getElementById("pEmail").innerHTML = email;

                // }



                function showMenu()
                {
                    let menu = document.getElementById("menu");
                    let box = document.getElementById("box-profile");

                    if(menu.style.display === "block")
                    {
                        menu.style.display = "none";
                        box.style.paddingTop = "0px";
                    }else{
                        menu.style.display = "block"
                        box.style.paddingTop = "125px"
                    }
                }

            </script>
		
	</body>
</html>