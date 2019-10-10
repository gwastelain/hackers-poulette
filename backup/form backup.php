<html>
<div class="container-fluid">
    <div class="jumbotron text-center">
        <h1>Contact Us</h1>
        <p>For all questions or claims, do not hesitate to contact us via the form below.</p>
    </div>

    <form class="form-group" method="post" action="form.php">

        <div class="row">
            <div class="col-md-6">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="" placeholder="Enter name" required alt="name input">
            </div>

            <div class="col-md-6">
                <label for="lastname">Lastname</label>
                <input type="text" id="lastname" name="lastname" value="" placeholder="Enter lastname" required
                    alt="lastname input">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="gender">Gender</label>
                Male <input type="radio" name="gender" value="male" alt="gender male select" required>
                Woman <input type="radio" name="gender" value="woman" alt="gender woman select" required>
                Other <input type="radio" name="gender" value="other" alt="gender other select" required>
            </div>

            <div class="col-md-6">
                <label for="email">Email adress</label>
                <input type="text" id="email" name="email" value="" placeholder="Enter email" required
                    alt="email input">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="country">Country</label>
                <?php include 'countries.php';?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="subject">Subject</label>
                <select name="subject" id="email_subject">
                    <option value="default subject" disabled alt>Select a subject</option>
                    <option value="question" alt="subject question">Question</option>
                    <option value="warranty" alt="subject warranty">Warranty</option>
                    <option value="return" alt="subject return">Return</option>
                </select>
            </div>

            <div class="col-md-12">
                <label for="message">Message</label>
                <textarea id="message" name="message" form="usrform" placeholder="Write your message" required
                    alt="message input" rows="5" cols="40"></textarea>
            </div>
        </div>

        <input type="submit" name="submit" value="Send">


    </form>
</div>

</html>