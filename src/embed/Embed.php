<?php
declare(strict_types=1);

namespace discordMessage\embed;

final class Embed implements EmbedInterface {

    /**
     * @var array
     */
    private array $data = [];

    /**
     * @return array
     */
    public function asArray() : array {
        return $this->data;
    }

    /**
     * @param string $title
     * @return EmbedInterface
     */
    public function setTitle(string $title) : EmbedInterface {
        $this->data['title'] = $title;
        return $this;
    }

    /**
     * @param string $content
     * @return EmbedInterface
     */
    public function setContent(string $content) : EmbedInterface {
        $this->data['description'] = $content;
        return $this;
    }

    /**
     * @param string $text
     * @param string|null $icon_url
     * @return EmbedInterface
     */
    public function setFooter(string $text, string $icon_url = null) : EmbedInterface {
        $this->data['footer'] = [
            'text' => $text,
            'icon_url' => $icon_url
        ];
        return $this;
    }

    /**
     * @param int $color
     * @return EmbedInterface
     */
    public function setColor(int $color) : EmbedInterface {
        $this->data['color'] = $color;
        return $this;
    }

    /**
     * @param string $name
     * @param string $value
     * @param bool $inline
     * @return EmbedInterface
     */
    public function addField(string $name, string $value, bool $inline = false) : EmbedInterface {
        $this->data['fields'][] = [
            'name' => $name,
            'value' => $value,
            'inline' => $inline
        ];
        return $this;
    }

    /**
     * @param string $url
     * @return EmbedInterface
     */
    public function setImage(string $url) : EmbedInterface {
        $this->data['image'] = [
            'url' => $url
        ];
        return $this;
    }

}