<?php include'validate.php';?>

<html>
<div class="container-fluid">
    <div class="jumbotron text-center">
        <h1>Contact Us</h1>
        <h4>For all questions or claims, do not hesitate to contact us via the form below.</h4>
    </div>

    <form class="form" method="post" action="index.php">

        <div class="form-group row">
            <div class="col-md-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter name"
                    alt="name input" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div> <?php echo check_name(); ?>
            </div>

            <div class="col-md-4">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value=""
                    placeholder="Enter lastname" alt="lastname input" required> <?php echo check_lastname(); ?>
            </div>

            <div class="col-md-4">
                <label for="gender">Gender</label>
                <div class="inline">
                    Male <input type="radio" name="gender" value="male" alt="gender male select" required>
                    Woman <input type="radio" name="gender" value="woman" alt="gender woman select" required>
                    Other <input type="radio" name="gender" value="other" alt="gender other select" required>
                </div>
            </div>
        </div>


        <div class="form-group row">
            <div class="col-md-6">
                <label for="email">Email adress</label>
                <input type="text" class="form-control" id="email" name="email" value="" placeholder="Enter email"
                    alt="email input" required> <?php echo check_mail(); ?>
            </div>


            <div class="col-md-6">
                <label for="country">Country</label>
                <div class="inline">
                    <?php include 'countries.php';?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <select name="subject" id="subject">
                <option value="default subject" alt="default subject" disabled>Select a subject</option>
                <option value="question" alt="subject question">Question</option>
                <option value="warranty" alt="subject warranty">Warranty</option>
                <option value="Others" alt="subject others" selected>Others</option>
            </select>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" name="message" placeholder="Write your message"
                alt="message input" rows="5" cols="40" required></textarea><?php echo check_message(); ?>
        </div>


        <input type="submit" class="btn btn-info" value="Submit">

    </form>
</div>


</html>