<template>
  <div class="py-2 ml-6 mt-3">
    <div class="grid grid-cols-5 gap-4 text-white">
      <h3 class="col-span-4 mb-4">
        {{ label }}
      </h3>
      <h3 class="col-span-1">
        Pts
      </h3>
    </div>
    <Answer short-question-label="1." value="Liverpool" points="0" />
    <Answer short-question-label="2." value="Man City" points="0" />
    <Answer short-question-label="3." value="Spurs" points="0" />
    <Answer short-question-label="4." value="Liverpool" points="0" />
    <Answer short-question-label="5." value="Liverpool" points="0" />
    <Answer short-question-label="6." value="Liverpool" points="0" />
    <Answer short-question-label="7." value="Liverpool" points="0" />
    <Answer short-question-label="8." value="Liverpool" points="0" />
    <Answer short-question-label="9." value="Liverpool" points="0" />
    <Answer short-question-label="10." value="Liverpool" points="0" />
    <Answer short-question-label="11." value="Liverpool" points="0" />
    <Answer short-question-label="12." value="Liverpool" points="0" />
    <Answer short-question-label="13." value="Liverpool" points="0" />
    <Answer short-question-label="14." value="Liverpool" points="0" />
    <Answer short-question-label="15." value="Liverpool" points="0" />
    <Answer short-question-label="16." value="Liverpool" points="0" />
    <Answer short-question-label="17." value="Liverpool" points="0" />
    <Answer short-question-label="18." value="Liverpool" points="0" />
    <Answer short-question-label="19." value="Liverpool" points="0" />
    <Answer short-question-label="20." value="Liverpool" points="0" />
  </div>
</template>

<script>
export default {
  props: {
    label: {
      type: String,
      required: true
    }
  },
  setup (props) {
    console.log(props.title)
  }
}
</script>

<style lang="scss" scoped></style>
