<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="contac.css" />
  </head>
  <body>
    <header>
        <?php include 'navbar.php' ?>
    </header>
    <div class="container">
      <h1>Contac Me</h1>
      <div class="tabel">
        <form>
          <div class="table" >
            <table>
              Full Name
            </table>
            <input class="nama" type="text" placeholder=" Your Full Name" />
          </div>
          <div class="table" id="email" >
            <table>
              Email
            </table>
            <input class="email" type="email" placeholder=" Unknown123@gmail.com" />
          </div>
          <div class="table">
            <table>
              Subject
            </table>
            <textarea name="" id="" cols="30" rows="10" class="massage" placeholder=" Massage" ></textarea>
            <!-- <input class="massage" type="text" /> -->
            <!-- <textarea class="table" id="pesan"></textarea> -->
          </div>
          <button type="submit" class="button" >Send</button>
        </form>
      </div>
    </div>
  </body>
</html>
