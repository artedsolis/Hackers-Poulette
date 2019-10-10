<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hackers Poulette Contact Website</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />
</head>

<body>

  <div class="container-fluid">

    <header>
      <div class="row">
        <img src="assets/img/hackers-poulette-logo_white.png" class="img-fluid" alt="hackers poulette official logo">
      </div>
    </header>

    <section>
      <p>All fields are required</p>
      <form method="post" action="cible.php" class="needs-validation">

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="first name">First Name</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First name" required alt="enter first name" name="firstname">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="last name">Last name</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Last name" required alt="enter last name" name="lastname">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="email address">Email address</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email address" required alt="enter email address" name="email">
        </div>

        <br />
        <p>Gender</p>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" alt="men" required value="men">
          <label class="form-check-label" for="inlineRadio1">Men</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" alt="women" required value="women">
          <label class="form-check-label" for="inlineRadio2">Women</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" alt="other" required value="other">
          <label class="form-check-label" for="inlineRadio2">Other</label>
        </div>
        <br />
        <br />
        <div class="form-group">
          <label for="choose your country">Choose your country</label>
          <select class="form-control" id="exampleFormControlSelect1" name="country">
            <option value="Austria" alt="Austria">Austria</option>
            <option value="Belgium" alt="Belgium">Belgium</option>
            <option value="Croatia" alt="Croatia">Croatia</option>
            <option value="Denmark" alt="Denmark">Denmark</option>
            <option value="Estonia" alt="Estonia">Estonia</option>
            <option value="France" alt="France">France</option>
            <option value="Germany" alt="Germany">Germany</option>
            <option value="Hungary" alt="Hungary">Hungary</option>
            <option value="Italy" alt="Italy">Italy</option>
            <option value="Spain" alt="Spain">Spain</option>
            <option value="United Kingdom" alt="United Kingdom">United Kingdom</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Subject</label>
          <select class="form-control" id="exampleFormControlSelect1" required name="choise">
            <option value="How did you heard about us ?" alt="How did you heard about us">How did you heard about us ?</option>
            <option value="You have a request" alt="You have a suggestion">You have a request</option>
            <option value="You have a question" alt="You have a question">You have a question</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Write your message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" alt="write your message" name="message" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary" value="send">Submit form</button>

      </form>
    </section>


  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
