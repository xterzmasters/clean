 <template>
 
<div>
    <emit-events @onFire="eventEmittedFromChild"/>
    <h2>Emmit Events</h2>
    <label for="message">Mensaje</label>
    <input id="message" v-model="message"/>
    <button @click="notify">Notificar al componente padre</button>
</div>
    
    
 
</template>

<script>
import { ref } from '@vue/composition-api'

export default defineComponent({
    name:"EmitEvents",
    setup(props, {emit}) {

        const  message = ref(value: "")
        const notify = () => {
            emit("onFire", message.value)


        }
        
        return {message, notify}
    },
    setup(){
        const eventEmittedFromChild = (message) =>{
            console.log(message)
        }

        return {eventEmittedFromChild}
    }
})
</script>