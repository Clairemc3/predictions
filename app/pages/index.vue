<template>
<div class="w-full">
  <h1 class="text-center">Dashboard</h1>
  <BlocksGroup>
    <Block title="Current predictions" description="View the current predictions" link="/my-predictions"></Block>
    <Block title="Previous predictions" description="Previous years results" link="#"></Block>
   <Block title="Your account" description="Manage your account" link="#"></Block>
  </BlocksGroup>
  </div>
</template>

<script>
export default {
  name: 'Dashboard',
  layout: 'default',
}
</script>
