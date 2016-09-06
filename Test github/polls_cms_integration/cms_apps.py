from cms.app_base import CMSApp
from cms.apphook_pool import apphook_pool
from django.utils.translation import ugettext_lazy as _


class PollsApphook(CMSApp):
    app_name = "polls"
    name = _("Polls Application")

    urls = ["polls.urls"]

    # def get_urls(self, page=None, language=None, **kwargs):
    #     return ["polls.urls"]


apphook_pool.register(PollsApphook)  # register the application
