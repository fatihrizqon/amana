<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <!-- Angular Material style sheet -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
    <!-- Material Design Lite style sheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.material.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">



</head>

<style>
body{
    font-family: 'Quicksand', sans-serif;
    background-color: #F1F8E9;
}
main{
  font-family: 'Quicksand', sans-serif;
}
h1,h2,h3,h4,h5,h6{
    font-family: 'Quicksand', sans-serif;
}
.super-light-green-tea{
  /*F1F839*/
  background-color: #F1F839;
  color: #33691E ;
}
.light-green-tea{
  /*C5E1A5*/
  background-color: #C5E1A5;
  color: #8BC34A ;
}
.green-tea{
  /*8BC34A*/
  background-color: #8BC34A;
  color: #FFF ;
}
.dark-green-tea{
  /*33691E*/
  background-color: #33691E;
  color: #F1F839 ;
}

.main-layout-transparent {
  font-family: 'Quicksand', sans-serif;
}
.main-layout-transparent .mdl-layout__header,
.main-layout-transparent .mdl-layout__drawer-button {
  color: white;
  background-color: #33691E;
}

.data-rental-container{
  background-color: #FFF;
  padding: 5px;
}
.rental-container{
  padding: 20px;
  background-color: #FFF;
}

.tambah-mobil{
    padding:30px;
}
.table-responsive {
    min-height: .01%;
    overflow-x: auto;
}
@media screen and (max-width: 767px) {
    .table-responsive {
        width: 100%;
        margin-bottom: 15px;
        overflow-y: hidden;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        border: 1px solid #ddd;
    }
    .table-responsive > .table {
        margin-bottom: 0;
    }
    .table-responsive > .table > thead > tr > th,
    .table-responsive > .table > tbody > tr > th,
    .table-responsive > .table > tfoot > tr > th,
    .table-responsive > .table > thead > tr > td,
    .table-responsive > .table > tbody > tr > td,
    .table-responsive > .table > tfoot > tr > td {
        white-space: nowrap;
    }
    .table-responsive > .table-bordered {
        border: 0;
    }
    .table-responsive > .table-bordered > thead > tr > th:first-child,
    .table-responsive > .table-bordered > tbody > tr > th:first-child,
    .table-responsive > .table-bordered > tfoot > tr > th:first-child,
    .table-responsive > .table-bordered > thead > tr > td:first-child,
    .table-responsive > .table-bordered > tbody > tr > td:first-child,
    .table-responsive > .table-bordered > tfoot > tr > td:first-child {
        border-left: 0;
    }
    .table-responsive > .table-bordered > thead > tr > th:last-child,
    .table-responsive > .table-bordered > tbody > tr > th:last-child,
    .table-responsive > .table-bordered > tfoot > tr > th:last-child,
    .table-responsive > .table-bordered > thead > tr > td:last-child,
    .table-responsive > .table-bordered > tbody > tr > td:last-child,
    .table-responsive > .table-bordered > tfoot > tr > td:last-child {
        border-right: 0;
    }
    .table-responsive > .table-bordered > tbody > tr:last-child > th,
    .table-responsive > .table-bordered > tfoot > tr:last-child > th,
    .table-responsive > .table-bordered > tbody > tr:last-child > td,
    .table-responsive > .table-bordered > tfoot > tr:last-child > td {
        border-bottom: 0;
    }
}
</style>

<body ng-app="myApp" ng-cloak>
  <div class="
  mdl-layout mdl-js-layout
  mdl-layout--fixed-header
  ">


<!--
mdl-layout mdl-js-layout
mdl-layout--fixed-drawer
mdl-layout--fixed-header
-->
