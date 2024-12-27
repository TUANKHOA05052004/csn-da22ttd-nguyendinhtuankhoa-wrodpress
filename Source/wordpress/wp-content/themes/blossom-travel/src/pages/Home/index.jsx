import { Icon, Sidebar, Card, Heading } from "../../components";
import { __ } from '@wordpress/i18n';

const Homepage = () => {
    const cardLists = [
        {
            iconSvg: <Icon icon="site" />,
            heading: __('Site Identity', 'blossom-travel'),
            buttonText: __('Customize', 'blossom-travel'),
            buttonUrl: cw_dashboard.custom_logo
        },
        {
            iconSvg: <Icon icon="colorsetting" />,
            heading: __("Color Settings", 'blossom-travel'),
            buttonText: __('Customize', 'blossom-travel'),
            buttonUrl: cw_dashboard.colors
        },
        {
            iconSvg: <Icon icon="layoutsetting" />,
            heading: __("Layout Settings", 'blossom-travel'),
            buttonText: __('Customize', 'blossom-travel'),
            buttonUrl: cw_dashboard.layout
        },
        {
            iconSvg: <Icon icon="frontpagesetting" />,
            heading: __("Frontpage Settings", 'blossom-travel'),
            buttonText: __('Customize', 'blossom-travel'),
            buttonUrl: cw_dashboard.front
        },
        {
            iconSvg: <Icon icon="generalsetting" />,
            heading: __("General Settings"),
            buttonText: __('Customize', 'blossom-travel'),
            buttonUrl: cw_dashboard.general
        },
        {
            iconSvg: <Icon icon="footersetting" />,
            heading: __('Footer Settings', 'blossom-travel'),
            buttonText: __('Customize', 'blossom-travel'),
            buttonUrl: cw_dashboard.footer
        }
    ];

    const proSettings = [
        {
            heading: __('Header Layouts', 'blossom-travel'),
            para: __('Choose from different unique header layouts.', 'blossom-travel'),
            buttonText: __('Learn More', 'blossom-travel'),
            buttonUrl: cw_dashboard?.get_pro
        },
        {
            heading: __('Multiple Layouts', 'blossom-travel'),
            para: __('Choose layouts for blogs, banners, posts and more.', 'blossom-travel'),
            buttonText: __('Learn More', 'blossom-travel'),
            buttonUrl: cw_dashboard?.get_pro
        },
        {
            heading: __('Multiple Sidebar', 'blossom-travel'),
            para: __('Set different sidebars for posts and pages.', 'blossom-travel'),
            buttonText:  __('Learn More', 'blossom-travel'),
            buttonUrl: cw_dashboard?.get_pro
        },
        {
            heading: __('Top Bar Settings', 'blossom-travel'),
            para: __('Show a notice or newsletter at the top.', 'blossom-travel'),
            buttonText: __('Learn More', 'blossom-travel'),
            buttonUrl: cw_dashboard?.get_pro
        },
        {
            para: __('Boost your website performance with ease.', 'blossom-travel'),
            heading: __('Performance Settings', 'blossom-travel'),
            buttonText: __('Learn More', 'blossom-travel'),
            buttonUrl: cw_dashboard?.get_pro
        },
        {
            para: __('Choose typography for different heading tags.', 'blossom-travel'),
            heading: __('Typography Settings', 'blossom-travel'),
            buttonText: __('Learn More', 'blossom-travel'),
            buttonUrl: cw_dashboard?.get_pro
        },
        {
            para: __('Import the demo content to kickstart your site.', 'blossom-travel'),
            heading: __('One Click Demo Import', 'blossom-travel'),
            buttonText: __('Learn More', 'blossom-travel'),
            buttonUrl: cw_dashboard?.get_pro
        },
    ];

    const sidebarSettings = [
        {
            heading: __('We Value Your Feedback!', 'blossom-travel'),
            icon: "star",
            para: __("Your review helps us improve and assists others in making informed choices. Share your thoughts today!", 'blossom-travel'),
            imageurl: <Icon icon="review" />,
            buttonText: __('Leave a Review', 'blossom-travel'),
            buttonUrl: cw_dashboard.review
        },
        {
            heading: __('Knowledge Base', 'blossom-travel'),
            para: __("Need help using our theme? Visit our well-organized Knowledge Base!", 'blossom-travel'),
            imageurl: <Icon icon="documentation" />,
            buttonText: __('Explore', 'blossom-travel'),
            buttonUrl: cw_dashboard.docmentation
        },
        {
            heading: __('Need Assistance? ', 'blossom-travel'),
            para: __("If you need help or have any questions, don't hesitate to contact our support team. We're here to assist you!", 'blossom-travel'),
            imageurl: <Icon icon="supportTwo" />,
            buttonText: __('Submit a Ticket', 'blossom-travel'),
            buttonUrl: cw_dashboard.support
        }
    ];

    return (
        <>
            <div className="customizer-settings">
                <div className="cw-customizer">
                    <div className="video-section">
                        <div className="cw-settings">
                            <h2>{__('Blossom Travel Tutorial', 'blossom-travel')}</h2>
                        </div>
                        <iframe src="https://www.youtube.com/embed/sp3TtJUcsuc?si=okht67irxkk26cu3" title={__( 'How to Start a Travel Blog in 2023 | Blossom Travel Tutorial', 'blossom-travek' )} frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerPolicy="strict-origin-when-cross-origin" allowFullScreen></iframe>
                    </div>
                    <Heading
                        heading={__( 'Quick Customizer Settings', 'blossom-travel' )}
                        buttonText={__( 'Go To Customizer', 'blossom-travel' )}
                        buttonUrl={cw_dashboard?.customizer_url}
                        openInNewTab={true}
                    />
                    <Card
                        cardList={cardLists}
                        cardPlace='customizer'
                        cardCol='three-col'
                    />
                    <Heading
                        heading={__( 'More features with Pro version', 'blossom-travel' )}
                        buttonText={__( 'Go To Customizer', 'blossom-travel' )}
                        buttonUrl={cw_dashboard?.customizer_url}
                        openInNewTab={true}
                    />
                    <Card
                        cardList={proSettings}
                        cardPlace='cw-pro'
                        cardCol='two-col'
                    />
                    <div className="cw-button">
                        <a href={cw_dashboard?.get_pro} target="_blank" className="cw-button-btn primary-btn long-button">{__('Learn more about the Pro version', 'blossom-travel')}</a>
                    </div>
                </div>
                <Sidebar sidebarSettings={sidebarSettings} openInNewTab={true} />
            </div>
        </>
    );
}

export default Homepage;