<template>
  <div>
    <div class="font-archivo bg-yellow-100 text-purple-900 uppercase text-lg py-2">
      {{ title }}
    </div>
    <Question label="League table" type="standing" />
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      required: true
    }
  },
  setup (props) {
    console.log(props.title)
  }
}
</script>
