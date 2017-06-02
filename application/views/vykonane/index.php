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
    margin: 4px 32px;
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



  <h2><?= $title ?></h2>
<?php foreach($vykonane as $vykonana) : ?>
  <h3><u><?php echo $vykonana['Meno'];  echo " ";?></u>
    <a class="button button1" href="<?php echo site_url('/vykonane/'.$vykonana['id']); ?>">Zobraziť podrobnosti</a></h3>
<?php endforeach; ?>
