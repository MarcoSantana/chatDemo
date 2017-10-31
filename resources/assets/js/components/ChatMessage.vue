<template lang="html">
  <div class="chat-message">
    <div>
      <p>{{ message.message }}</p>
      <small>{{ message.user }}</small>
    </div>
  </div>
</template>
<script>
  export default {
    props: ['message']
  }
</script>
<style lang="css">
  .chat-message {
    padding: 1rem;
  }

  .chat-message > p {
    margin-bottm: .5rem;
  }
</style>
