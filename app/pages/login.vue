<template>
  <div class="container mx-auto">
    <div class="text-center mt-3">
      <h1 class="text-xl">Log in</h1>
    </div>
    <div class="mx-4">
      <form>
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="SIGN IN" class="text-white uppercase">
      </form>
    </div>

  </div>
</template>

<script>
export default {
  name: 'Login',
  layout: 'default',
}
</script>
