<template>
    <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText">
        <template #field>
            <div class="flex content-center items-center">
                <input :id="field.attribute" type="text"
                    class="flex-1 form-input form-input-bordered form-control"
                    :class="errorClasses"
                    :placeholder="field.name"
                    :disabled="isReadonly"
                    v-model="value"
                />
                <copy-button
                    :value="copyFieldValue"
                    :title="copyButtonTitleValue"
                    class="w-4 ml-3 mr-3"
              />
            </div>
        </template>
    </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'
import CopyButton from './CopyButton'
import { copyButtonTitle, copyValue } from '../utilities'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],
    components: {
        CopyButton
    },
    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || '')
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value
        },
    },
    computed: {
        copyButtonTitleValue() {
            return copyButtonTitle(this.field)
        },
        copyFieldValue() {
            return copyValue(this.field)
        },
    }
}
</script>
