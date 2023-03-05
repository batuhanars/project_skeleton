<template>
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <Aside />
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <Header />
                <!--end::Header-->
                <!--begin::Content-->
                <slot />
                <!--end::Content-->
                <!--begin::Footer-->
                <Footer />
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
</template>

<script setup>
import Header from "./inc/Header.vue";
import Aside from "./inc/Aside.vue";
import Footer from "./inc/Footer.vue";
</script>
