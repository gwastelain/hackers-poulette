<html>
<div class="container-fluid">
    <div class="jumbotron text-center">
        <h1>Contact Us</h1>
        <h4>For all questions or claims, do not hesitate to contact us via the form below.</h4>
    </div>

    <form class="was-validated" method="post" action="index.php" novalidate>

        <div class="form-group row">
            <div class="col-md-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter name" required
                    alt="name input">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="col-md-4">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value=""
                    placeholder="Enter lastname" required alt="lastname input">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
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
                    required alt="email input">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
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
            <select name="subject" id="email_subject">
                <option value="default subject" disabled alt>Select a subject</option>
                <option value="question" alt="subject question">Question</option>
                <option value="warranty" alt="subject warranty">Warranty</option>
                <option value="return" alt="subject return">Return</option>
            </select>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" name="message" form="usrform" placeholder="Write your message"
                required alt="message input" rows="5" cols="40"></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <input type="submit" class="btn btn-info" value="Submit">

    </form>
</div>


</html>