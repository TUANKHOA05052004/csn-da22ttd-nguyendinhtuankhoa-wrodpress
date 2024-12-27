import { Icon, Card } from "../../components";
import { __ } from "@wordpress/i18n";
import { mainDemo, demo2, demo3, demo4, demo5, demo6 } from "../../components/images";

const StarterSites = () => {
    const cardList = [
        {
            heading: __('Blossom Travel Pro', 'blossom-travel'),
            imageurl: mainDemo,
            buttonUrl: __('https://blossomthemesdemo.com/blossom-travel-pro/', 'blossom-travel'),
        },
        {
            heading: __('Jasmine (Gutenberg)', 'blossom-travel'),
            imageurl: demo2,
            buttonUrl: __('https://blossomthemesdemo.com/blossom-travel-pro-2/', 'blossom-travel'),
        },
        {
            heading: __('Dream Escapades (Gutenberg)', 'blossom-travel'),
            imageurl: demo3,
            buttonUrl: __('https://blossomthemesdemo.com/blossom-travel-pro-3/', 'blossom-travel'),
        },
        {
            heading: __('Journey (Gutenberg)', 'blossom-travel'),
            imageurl: demo4,
            buttonUrl: __('https://blossomthemesdemo.com/blossom-travel-pro-4/', 'blossom-travel'),
        },
        {
            heading: __('Escapade (Gutenberg)', 'blossom-travel'),
            imageurl: demo5,
            buttonUrl: __('https://blossomthemesdemo.com/blossom-travel-pro-6/', 'blossom-travel'),
        },
        {
            heading: __('Sweet Escape (Gutenberg)', 'blossom-travel'),
            imageurl: demo6,
            buttonUrl: __('https://blossomthemesdemo.com/blossom-travel-pro-5/', 'blossom-travel'),
        },

    ]
    return (
        <>
            <Card
                cardList={cardList}
                cardPlace='starter'
                cardCol='three-col'
            />
            <div className="starter-sites-button cw-button">
                <a href={__('https://blossomthemes.com/theme-demo/?theme=blossom-travel-pro&utm_source=blossom_travel&utm_medium=dashboard&utm_campaign=theme_demo', 'blossom-travel')} target="_blank" className="cw-button-btn outline">
                    {__('View All Demos', 'blossom-travel')}
                    <Icon icon="arrowtwo" />
                </a>
            </div>
        </>
    );
}

export default StarterSites;