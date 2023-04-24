<template>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 cold-md-6 pt-5">
                <label for="location">Location</label>
                <select class="form-select" id="location" aria-label="Location">
                    <option selected>Alabama</option>
                    <option value="1">New York</option>
                    <option value="2">Connecticut</option>
                    <option value="3">Nebraska</option>
                </select>

                <label for="datetime">Datetime</label>
                <select class="form-select" id="datetime" aria-label="Datetime">
                    <option selected>Alabama</option>
                    <option value="1">New York</option>
                    <option value="2">Connecticut</option>
                    <option value="3">Nebraska</option>
                </select>

                <label for="class">Class</label>

                <select class="form-select" id="class" aria-label="Class">
                    <option selected>Alabama</option>
                    <option value="1">New York</option>
                    <option value="2">Connecticut</option>
                    <option value="3">Nebraska</option>
                </select>

                <label for="airport">Airport</label>

                <select class="form-select" id="airport" aria-label="Airport">
                    <option selected>Alabama</option>
                    <option value="1">New York</option>
                    <option value="2">Connecticut</option>
                    <option value="3">Nebraska</option>
                </select>

            </div>
            <div class="col-6 col-md-6 offset-md-3">
                <CCarousel controls indicators>
                    <CCarouselItem>
                        <img class="d-block w-100" src="https://estatousa.com/wp-content/uploads/2022/08/Alabamas-cities-are-among-the-most-dangerous-in-the-country..jpg" alt="slide 1"/>
                        <CCarouselCaption class="d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </CCarouselCaption>
                    </CCarouselItem>
                    <CCarouselItem>
                        <img class="d-block w-100" src="https://estatousa.com/wp-content/uploads/2022/08/Alabamas-cities-are-among-the-most-dangerous-in-the-country..jpg" alt="slide 2"/>
                        <CCarouselCaption class="d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </CCarouselCaption>
                    </CCarouselItem>
                    <CCarouselItem>
                        <img class="d-block w-100" src="https://cdn.mequieroir.com/wp-content/uploads/2020/10/lincoln-scaled.jpg" alt="slide 3"/>
                        <CCarouselCaption class="d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </CCarouselCaption>
                    </CCarouselItem>
                    <CCarouselItem>
                        <img class="d-block w-100" src="https://newscdn2.weigelbroadcasting.com/9gxjS-1597770116-172153-blog-Chicago%20credit%20iStock%20and%20dibrova.jpg" alt="slide 3"/>
                        <CCarouselCaption class="d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </CCarouselCaption>
                    </CCarouselItem>
                    <CCarouselItem>
                        <img class="d-block w-100" src="https://a.cdn-hotels.com/gdcs/production5/d1311/3af59bd7-0d47-4291-9ba0-c34803de7c54.jpg"/>
                        <CCarouselCaption class="d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </CCarouselCaption>
                    </CCarouselItem>
                </CCarousel>
            </div>
        </div>
    </div>
</template>

<script>
import {defineComponent} from "vue";
import {CCarousel, CCarouselItem, CCarouselCaption} from '@coreui/bootstrap-vue';

export default defineComponent({
    components: {CCarouselItem,CCarousel, CCarouselCaption}
})


</script>

<style scoped>

</style>
