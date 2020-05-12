<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Slider extends Block
{
    /**
     * The name of the block.
     *
     * @var string
     */
    public $name = 'Slider';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Slick Slider Block';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'custom';

    /**
     * The icon of this block.
     *
     * @var string|array
     */
    public $icon = 'star-half';

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'pages' => $this->pages(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $slider = new FieldsBuilder('slider');

        $slider
            ->addRepeater('pages')
                ->addText('text')
                ->addFile('background', [
                    'label' => 'Background Media (image or video)',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => [],
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'return_format' => 'array',
                    'library' => 'all',
                    'min_size' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ])
            ->endRepeater();

        return $slider->build();
    }

    /**
     * Return the pages field.
     *
     * @return array
     */
    public function pages()
    {
        return get_field('pages') ?: [];
    }
}
