<?php
$name = "MOHAMAD ALIFFDANIAL FIRDAUS BIN ZAINI";
$email = "aliffdanialfirdaus@gmail.com";
$phone = "011-33268379";
$address = "No.50, Tamana Lebunda, Jalan Bako, Petra Jaya, 93050, Kuching, Sarawak, Malaysia";
$profileImage = "resumepic.jpg";  
$education = ["SMK Tunku Abdul Rahman Kuching", "Politeknik Kuching"];
$diploma = "Information Technology (Digital Technology)";
$institution = "Politeknik Kuching";
$graduationYear = "2025";
$currentcgpa = "3.54";
$language = ["Bahasa Malaysia", "English"];
$jobDuration = "06/01/2025 - 16/05/2025";
$profile = "I am a very motivated and diligent student with a passion for electronics and computers. Fascinated by the ever-growing world of technology, I am inspired to make a contribution that enhances user experiences and improves system efficiencies. I am eager to apply my skills in programming, problem-solving, and teamwork to real-world challenges while continuously learning and adapting to new advancements in the industry.";
$skills = ["Java", "JavaScript", "Python", "HTML", "CSS", "C", "C++"];
$achievements = ["Anugerah Ketua Jabatan (GPA > 3.50)", "Math Computing Challenge", "Program Capture The Flag Boot Camp"];
$softskills = ["Communication Skills", "Teamwork and Collaboration", "Adaptability and Flexibility", "Problem Solving"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77a6f7 3px solid;
        }
        header h1 {
            text-align: center;
            text-transform: uppercase;
            margin: 0;
        }
        section {
            padding: 20px;
        }
        .section-title {
            font-size: 24px;
            margin-bottom: 10px;
            border-bottom: 2px solid #333;
        }
        .section-content {
            margin-bottom: 20px;
            width: 100%;
            white-space: normal;
        }
        .profile-img {
            width: 150px;
            height: 150px; 
            display: block;
            margin: 0 auto;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Resume</h1>
    </header>

    <div class="container">
        <section>
            <h2 class="section-title">Profile Image</h2>
            <div class="section-content">
                <img src="<?php echo $profileImage; ?>" alt="Profile Image" class="profile-img">
            </div>
        </section>

        <section>
            <h2 class="section-title">Contact Information</h2>
            <div class="section-content">
                <p>Name: <?php echo $name; ?></p>
                <p>Email: <?php echo $email; ?></p>
                <p>Phone: <?php echo $phone; ?></p>
                <p>Address: <?php echo $address; ?></p>
            </div>
        </section>

        <section>
            <h2 class="section-title">Education</h2>
            <div class="section-content">
                <ul>
                    <?php
                    foreach ($education as $edu) {
                        echo "<li>$edu</li>";
                    }
                    ?>
                </ul>
                <p>Diploma: <?php echo $diploma; ?></p>
                <p>Current Institution: <?php echo $institution; ?></p>
                <p>Current CGPA: <?php echo $currentcgpa; ?></p>
                <p>Graduation Year: <?php echo $graduationYear; ?></p>
                <p>Duration Of Work: <?php echo $jobDuration; ?></p>
            </div>
        </section>

        <section>
            <h2 class="section-title">Profile</h2>
            <div class="section-content">
                <p>Profile: <?php echo nl2br($profile); ?></p>
            </div>
        </section>

        <section>
            <h2 class="section-title">Languages</h2>
            <div class="section-content">
                <ul>
                    <?php
                    foreach ($language as $lang) {
                        echo "<li>$lang</li>";
                    }
                    ?>
                </ul>
            </div>
        </section>

        <section>
            <h2 class="section-title">Achievements/Awards</h2>
            <div class="section-content">
                <ul>
                    <?php
                    foreach ($achievements as $achievement) {
                        echo "<li>$achievement</li>";
                    }
                    ?>
                </ul>
            </div>
        </section>

        <section>
            <h2 class="section-title">Skills</h2>
            <div class="section-content">
                <ul>
                    <?php
                    foreach ($skills as $skill) {
                        echo "<li>$skill</li>";
                    }
                    ?>
                </ul>
            </div>
        </section>

        <section>
            <h2 class="section-title">Soft Skills</h2>
            <div class="section-content">
                <ul>
                    <?php
                    foreach ($softskills as $softskill) {
                        echo "<li>$softskill</li>";
                    }
                    ?>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>
