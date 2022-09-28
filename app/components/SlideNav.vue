<template>
  <div class="slidemenu">
    <SlideMenu right width=300>
      <a id="menu" href="#">
        <span>My profile</span>
      </a>
      <a id="menu" href="/my-predictions">
        <span>Current Predictions (2022)</span>
      </a>
      <a id="menu" href="#">
        <span>Previous predictions</span>
      </a>
    </SlideMenu>
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
      left: 36px;
      top: 20px;
      cursor: pointer;
    }

 .slidemenu .bm-menu {
    background-color: white;
}

 .slidemenu .bm-item-list > * > span {
      color: purple;
    }

</style>

