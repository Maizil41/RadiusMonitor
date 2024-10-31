# This is free software, licensed under the Apache License, Version 2.0
#
# Copyright (C) 2024 Maizil <maizilpc7@gmail.com>

include $(TOPDIR)/rules.mk

LUCI_TITLE:=LuCI for Radius Monitor.
LUCI_DEPENDS:=+luci +php8-cli +php8 +php8-mod-mysqli +php8-mod-pdo-mysql +php8-mod-gd +php8-mod-xml +php8-mod-filter +php8-mod-curl +iptables-nft +iptables-mod-hashlimit
LUCI_DESCRIPTION:=Application for monitoring RADIUS server.
LUCI_MAINTAINER:=Maizil <maizilpc7@gmail.com>

PKG_MAINTAINER:=Maizil <maizilpc7@gmail.com>
PKG_VERSION:=2.4
PKG_RELEASE:=beta
PKG_LICENSE:=Apache-2.0
PKG_ARCH:=all

include $(TOPDIR)/feeds/luci/luci.mk

# call BuildPackage - OpenWrt buildroot signature
