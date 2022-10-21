<template>
  <div class="slidemenu">
    <Slide :right="true" :closeOnNavigation="true" width=300>
      <a id="menu" href="#">
        <span>My profile</span>
      </a>
      <a id="menu" href="/my-predictions">
        <span>Current Predictions (2022)</span>
      </a>
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

 .slidemenu .bm-item-list > * > span {
      color: purple;
    }

</style>
