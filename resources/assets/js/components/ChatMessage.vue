<template lang="html">
  <div class="chat-message">
    <div>
      <p>{{ message }}</p>
      <small>{{ user }}</small>
    </div>
  </div>
</template>
<script>
  export default {
    data() {
        return {
            message: "This is some message text",
            user: "John Doe",
        }
    }
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