<?php

use Illuminate\Database\Seeder;

class social_networks_share extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            \App\Models\SocialNetworksShares::insert([
                'text' => 'Shares text',
                'shares' => '{"vk":{"link":"https://vk.com/share.php?url=[link]&description=[text]","icon":"demo-icon icon-vk","color":"vk_color","need_show":0},"fb":{"link":"https://www.facebook.com/sharer/sharer.php?u=[link]","icon":"demo-icon icon-fb","color":"fb_color","need_show":0},"ok":{"link":"https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&st.shareUrl=[link]","icon":"demo-icon icon-ok","color":"ok_color","need_show":0},"tw":{"link":"https://twitter.com/intent/tweet?text=[text]&url=[link]","icon":"demo-icon icon-tw","color":"tw_color","need_show":0},"tl":{"link":"tg://msg?text=[link] [text]","icon":"demo-icon icon-tl","color":"tl_color","need_show":0}}'
            ]);
        } catch (Exception $ex) {
        }
    }
}