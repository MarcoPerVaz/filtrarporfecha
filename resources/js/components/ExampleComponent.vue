<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        Cantidad de actividades: {{ dates }}
                    </div>
                    <div class="card-body" v-for="(dateMonth, index) in datesMonth" :key="index">
                        Fecha de inicio: {{ dateMonth.start_date }} Fecha de fin: {{ dateMonth.end_date }} 
                        Total de actividades desde vue: {{ datesMonth.length }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                dates: '',
                datesMonth: [],
            }
        },
        mounted() {
            axios.get('/dates')
                .then( res => {
                    // console.log(res.data);
                    this.dates = res.data.dates
                    this.datesMonth = res.data.datesMonth
                })
        }
    }
</script>
