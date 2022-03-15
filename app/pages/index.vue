<template>
<div>
  <h1>Dashboard</h1>
  <ul>
    <li>
      Redirected to login page if not authenticated
    </li>
    <li>
      Precictions to answer if draft available
    </li>
    <li>
      List of previous predictions if no live predictions
    </li>
    <li>
      Score sheet for current predictions if live predictions
    </li>
  </ul>
  </div>
</template>

<script>
export default {
  name: 'Dashboard',
  layout: 'default',
}
</script>
