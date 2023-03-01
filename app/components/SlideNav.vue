<template>
  <div class="slidemenu">
    <Slide :right="true" :close-on-navigation="true" width="300">
      <a id="menu" href="#">
        <span>My profile</span>
      </a>
      <span>Current Predictions (2022)</span>
      <ul class="submenu">
          <li>
            <a id="menu" href="/my-predictions">
              <span>My predictions</span>
            </a>
          </li>
          <li>
            <a id="menu" href="/compare-predictions">
              <span>Compare predictions</span>
            </a>
          </li>
      </ul>
      <a id="menu" href="#">
        <span>Previous predictions</span>
      </a>
    </Slide>
  </div>
</template>

<script>

</script>

<style>
.slidemenu .bm-burger-bars {
    background-color: white;
}

.slidemenu .bm-burger-button {
      position: fixed;
      width: 36px;
      height: 30px;
      right: 36px;
      left: initial;
      top: 20px;
      cursor: pointer;
    }

 .slidemenu .bm-menu {
    background-color: white;
}

 /* .slidemenu .bm-item-list > * > span {
      color: purple;
      font-family: 'Archivo Black', sans-serif;
     text-transform: uppercase;
   } */



  .bm-item-list>*>span {
      color: purple;
      font-family: 'Archivo Black', sans-serif;
      text-transform: uppercase;
      font-size: 15px;
      margin-left: 10px;

  }

  .bm-item-list>span {
      margin-left: 10px;
   }

  .bm-item-list {
    margin-left: 10px;
      color: purple;
      font-family: 'Archivo Black', sans-serif;
      text-transform: uppercase;
      font-size: 15px;
  }


  .slidemenu .submenu {
    margin-left: 20px;
    display: block;
  }

  .submenu ul {
    margin-left:20px;
  }

  .submenu li {
    margin-bottom: 10px;
    padding-left:5px;
    list-style-type: square;
  }

</style>
