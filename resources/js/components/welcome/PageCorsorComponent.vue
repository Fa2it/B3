<template>
  <div id="page-scroll-reduce"  v-on:click="handleScroll" class="mx-auto" style="border-radius: 50%; border: 2px solid #FFF; cursor: pointer; width:3rem; height:3rem">
      <div class="d-flex justify-content-center">
          <i class="fas fa-angle-down" style="font-size:3rem;color:#FFF"></i>
      </div>
  </div>
</template>

<script>
    export default {
        methods: {
              handleScroll (event) {

                // Any code to be executed when the window is scrolled
                var pagescrollreduce = document.getElementById('page-scroll-reduce')
                pagescrollreduce.parentNode.style.visibility = 'hidden';
                pagescrollreduce.parentNode.style.height = '0';
                pagescrollreduce.parentNode.style.WebkitTransition = 'height 1s';
                pagescrollreduce.parentNode.style.transition = 'height 1s';
                var hoso = document.getElementById('hide-on-scroll-one')
                var hosoh = document.getElementById('hide-on-scroll-oneh')

                hosoh.style.fontSize="2rem";
                hosoh.style.WebkitTransition = 'fontSize 3s';
                hosoh.style.transition = 'fontSize 3s';

                hoso.style.height="0";
                hoso.style.visibility = 'hidden';
                hoso.style.WebkitTransition = 'height 1s';
                hoso.style.transition = 'height 1s';
              },
              created () {

              },
              destroyed () {
                window.removeEventListener('scroll', this.handleScroll2);
              }
        },
        mounted() {
          window.addEventListener('scroll', this.handleScroll);
        }
    }
</script>
