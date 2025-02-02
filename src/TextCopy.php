<?php

namespace Waynestate\Nova\TextCopy;

use Closure;
use Laravel\Nova\Fields\Field;

class TextCopy extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'text-copy';

    public $meta = [
        'show_button_on_hover' => false,
    ];

    /**
     * Truncate the fields displayed value.
     *
     * @param int $length
     * @return TextCopy
     */
    public function truncate(int $length = 0): static
    {
        $this->withMeta(['truncate' => $length]);

        return $this;
    }

    /**
     * Apply a mask to the display.
     *
     * @param string $character
     * @return TextCopy
     */
    public function mask(string $character = '*'): static
    {
        $this->withMeta([
            'masked' => true,
            'masked_character' => $character,
        ]);

        return $this;
    }

    /**
     * Set the copy button's title attribute.
     *
     * @param string $title
     * @return TextCopy
     */
    public function copyButtonTitle(string $title = ''): static
    {
        $this->withMeta([
            'copy_button_title' => $title,
        ]);

        return $this;
    }

    /**
     * Mutate the value that will be copied.
     *
     * @param int|string|Closure $value
     * @return TextCopy
     */
    public function copyValue(int|string|Closure $value): static
    {
        $this->withMeta([
            'copy_value' => $value instanceof Closure
                ? $value($this->value)
                : $value,
        ]);

        return $this;
    }

    /**
     * Hide the copy button until a user hovers over the field value.
     *
     * @return TextCopy
     */
    public function showButtonOnlyOnHover(): static
    {
        $this->withMeta([
            'show_button_on_hover' => true,
        ]);

        return $this;
    }
}
