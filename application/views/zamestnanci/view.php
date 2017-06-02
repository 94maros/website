<style>
.bordered{
  border-bottom: 1px solid black;
  }
.button{
  background-color: #d3d3d3; /* Green */
    border: none;
    color: black;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 4px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;

}
.button1{
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
}
.button1:hover{
  background-color: #3d3d3d;
  color: white;
}
</style>

<h2><?php echo $zamestnanec['Meno'];  echo " "; echo $zamestnanec['Priezvisko']; ?></h2>
<p><?php echo $zamestnanec['Adresa'];?></p>
<small class="cena">Kontaktný e-mail:
  <b><?php echo $zamestnanec['E-mail']; ?></b>, Telefón: <b><?php echo $zamestnanec['Telefón']; ?></b> </small>

  <p><a class="button button1" href="#" onclick="history.back();">Späť</a></p>
