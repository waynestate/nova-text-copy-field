<template>
    <div class="flex" @mouseover="hover = true" @mouseleave="hover = false">
        <div class="flex-no-shrink">{{ fieldDisplayValue ?? '—' }}</div>
        <copy-button
            v-show="copyFieldValue"
            :value="copyFieldValue"
            :title="copyButtonTitleValue"
            :class="['w-4 ml-3 mr-3', {'invisible': ! shouldShowButton}]"
        />
    </div>
</template>

<script>
import CopyButton from './CopyButton'
import { filterField, copyButtonTitle, copyValue } from '../utilities'

export default {
    components: { CopyButton },
    props: ['resourceName', 'field'],
    data() {
        return {
            hover: false
        }
    },
     computed: {
        fieldDisplayValue() {
            return filterField(this.field)
        },
        copyButtonTitleValue() {
            return copyButtonTitle(this.field)
        },
        copyFieldValue() {
            return copyValue(this.field)
        },
        shouldShowButton() {
            if (this.field.show_button_on_hover) {
                return this.hover
            }

            return true
        }
    }
}
</script>
