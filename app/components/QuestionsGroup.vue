<template>
    <div>
      <div class="font-archivo bg-yellow-100 text-purple-900 uppercase text-base">{{ title }}</div>
      <Question label="League table" type="standing"/>
    </div>
</template>

<script>
export default {
  props: {
    title: String
  },
  setup(props) {
    console.log(props.title)
  }
}
</script>
