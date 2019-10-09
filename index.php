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
      <form method="post" action="cible.php">
        <div class="form-group">
          <label for="formGroupExampleInput"></label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First name">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2"></label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Last name">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2"></label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email address">
        </div>
        <p>Gender</p>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">Men</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">Women</label>
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Choose your country</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Australia</option>
            <option>Belgium</option>
            <option>Canada</option>
            <option>France</option>
            <option>Germany</option>
            <option>Spain</option>
            <option>United Kingdom</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Subject</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>How did you heard about us</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit form</button>

      </form>
    </section>

  </div>





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
