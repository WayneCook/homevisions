<template>
    <v-row>
        <v-col class="pa-2">

        <v-card elevation="1" class="chart-container">

            <v-card-title class="title font-weight-medium">
                Daily Visit Tracker
            </v-card-title>
            <v-divider></v-divider>
            <v-card-text class="pa-6">
                <v-chart autoresize :options="options" />
            </v-card-text>
        </v-card>
        </v-col>
    </v-row>
</template>

<script>

import ECharts from 'vue-echarts'
import 'echarts/lib/chart/line'
import 'echarts/lib/component/tooltip'
import 'echarts/lib/component/toolbox'
import 'echarts/lib/component/legend'
import 'echarts/lib/component/title'
import 'echarts/lib/component/dataZoom'


export default {
    components: {
        'v-chart': ECharts
    },
    data() {
        return {

        options: {
            tooltip: {
                trigger: 'axis',
                position: function (pt) {
                    return [pt[0], '10%'];
                }
            },
            title: {
                left: 'center',
                text: 'Daily site visits',
                textStyle: {
                    color: 'hsla(0, 0%, 30%, 1)',
                    fontFamily: 'roboto',
                    fontWeight: '400',
                    fontSize: 16
                },
            },
            toolbox: {
                show: false,
                feature: {
                    dataZoom: {
                        yAxisIndex: 'none'
                    },
                    restore: {},
                    saveAsImage: {}
                }
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: []
            },
            yAxis: {
                type: 'value',
                boundaryGap: [0, '100%']
            },
            dataZoom: [{
                type: 'inside',
                start: 0,
                end: 100
            }, {
                start: 0,
                end: 100,
                handleIcon: 'M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z',
                handleSize: '100%',
                handleStyle: {
                    color: '#fff',
                    shadowBlur: 3,
                    shadowColor: 'rgba(0, 0, 0, 0.6)',
                    shadowOffsetX: 2,
                    shadowOffsetY: 2
                }
            }],
            series: {
                name:'Daily visits',
                type:'line',
                smooth: true,
                symbol: 'none',
                sampling: 'average',
                itemStyle: {
                    color: 'rgb(255, 70, 131)'
                },
                areaStyle: {
                    color: new ECharts.graphic.LinearGradient(0, 0, 0, 1, [{
                        offset: 0,
                        color: 'rgb(255, 158, 68)'
                    }, {
                        offset: 1,
                        color: 'rgb(255, 70, 131)'
                    }])
                },
                data: []
            }

        }

     }
    },
    mounted() {

        this.options.series.data = Object.values(this.$store.getters['admin/getViews']).map(function(numArray){
                return numArray.length;
        });
        this.options.xAxis.data = Object.keys(this.$store.getters['admin/getViews']);

    },
    computed: {
        //
    }

}
</script>

<style scoped>

.echarts {
    width: 100%;
    min-width: 400px;
}

.chart-container {
    width: 100%;
}

</style>
