<template>
  <div>
    <div class="content-center">
      <h1>Log in</h1>
    </div>
    <form>
      <input type="text" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password">
      <input type="submit" value="SIGN IN" class="text-white uppercase">
    </form>

  </div>
</template>

<script>
export default {
  name: 'Login',
  layout: 'default',
}
</script>
