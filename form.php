<?php if (session_start()) { ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>

            <?php
//            if ($_POST['submit']) {


            if ($_SESSION['user'] === 'admin' & $_SESSION['password'] === '00000') {
                ?>
                <form action="process.php" method="POST">
                    <p>Customer Name</p>
                    <input type="text" name="name" placeholder="Sk Rimon Babu"><br>
                    <p>Email</p>
                    <input type="email" name="email" placeholder="skrimonbabu@gmail.com"><br>
                    <p>Phone Number</p>
                    <input type="phone" required= "true" name="number" maxlength="11" placeholder="01770339302"><br>
                    <p>Facebook url</p>
                    <input type="url" name="url" placeholder="https://www.facebook.com/skrimonbabu"><br>
                    <p>District</p>
                    <select name="district">

                        <option value="">Select District</option>
                        <option value="Barguna District">Barguna District</option>
                        <option value="Barisal District">Barisal District</option>
                        <option value="Bhola District">Bhola District</option>
                        <option value="Jhalokati District">Jhalokati District</option>
                        <option value="Patuakhali District">Patuakhali District</option>
                        <option value="Pirojpur District">Pirojpur District</option>
                        <option value="Bandarban District">Bandarban District</option>
                        <option value="Brahmanbaria District">Brahmanbaria District</option>
                        <option value="Chandpur District">Chandpur District</option>
                        <option value="Chittagong District">Chittagong District</option>
                        <option value="Comilla District">Comilla District</option>
                        <option value="Cox's Bazar District">Cox's Bazar District</option>
                        <option value="Feni District">Feni District</option>
                        <option value="Khagrachhari District">Khagrachhari District</option>
                        <option value="Lakshmipur District">Lakshmipur District</option>
                        <option value="Noakhali District">Noakhali District</option>
                        <option value="Rangamati District">Rangamati District</option>
                        <option value="Dhaka District">Dhaka District</option>
                        <option value="Faridpur District">Faridpur District</option>
                        <option value="Gazipur District">Gazipur District</option>
                        <option value="Gopalganj District">Gopalganj District</option>
                        <option value="Kishoreganj District">Kishoreganj District</option>
                        <option value="Madaripur District">Madaripur District</option>
                        <option value="Manikganj District">Manikganj District</option>
                        <option value="Munshiganj District">Munshiganj District</option>
                        <option value="Narayanganj District">Narayanganj District</option>
                        <option value="Narsingdi District">Narsingdi District</option>
                        <option value="Rajbari District">Rajbari District</option>
                        <option value="Shariatpur District">Shariatpur District</option>
                        <option value="Tangail District">Tangail District</option>
                        <option value="Bagerhat District">Bagerhat District</option>
                        <option value="Chuadanga District">Chuadanga District</option>
                        <option value="Jessore District">Jessore District</option>
                        <option value="Jhenaidah District">Jhenaidah District</option>
                        <option value="Khulna District">Khulna District</option>
                        <option value="Kushtia District">Kushtia District</option>
                        <option value="Magura District">Magura District</option>
                        <option value="Meherpur District">Meherpur District</option>
                        <option value="Narail District">Narail District</option>
                        <option value="Satkhira District">Satkhira District</option>
                        <option value="Jamalpur District">Jamalpur District</option>
                        <option value="Mymensingh District">Mymensingh District</option>
                        <option value="Netrakona District">Netrakona District</option>
                        <option value="Sherpur District">Sherpur District</option>
                        <option value="Bogra District">Bogra District</option>
                        <option value="Joypurhat District">Joypurhat District</option>
                        <option value="Naogaon District">Naogaon District</option>
                        <option value="Natore District">Natore District</option>
                        <option value="Chapainawabganj">Chapainawabganj</option>
                        <option value="Pabna District">Pabna District</option>
                        <option value="Rajshahi District">Rajshahi District</option>
                        <option value="Sirajganj District">Sirajganj District</option>
                        <option value="Dinajpur District">Dinajpur District</option>
                        <option value="Gaibandha District">Gaibandha District</option>
                        <option value="Kurigram District">Kurigram District</option>
                        <option value="Lalmonirhat District">Lalmonirhat District</option>
                        <option value="Nilphamari District">Nilphamari District</option>
                        <option value="Panchagarh District">Panchagarh District</option>
                        <option value="Rangpur District">Rangpur District</option>
                        <option value="Thakurgaon District">Thakurgaon District</option>
                        <option value="Habiganj District">Habiganj District</option>
                        <option value="Moulvibazar District">Moulvibazar District</option>
                        <option value="Sunamganj District">Sunamganj District</option>
                        <option value="Sylhet District">Sylhet District</option>

                    </select>
                    <input type="submit" name="submit" value="Add Customer">
                </form>
                <?php
            } else {
                echo 'submit user name & password correctly';
            }
//            } else {
//                echo 'submit user name & password correctly';
//            }
            ?>

        </body>
    </html>
    <?php
} else {

}




