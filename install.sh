#!/bin/sh

# Radius Monitor installer

# check env
if [[ ! -x "/bin/opkg" || ! -x "/sbin/fw4" ]]; then
	echo "only supports OpenWrt build with firewall4!"
	exit 1
fi

# include openwrt_release
. /etc/openwrt_release

# update feeds
echo "update feeds"
opkg update

# download IPK
echo "download IPK"
TAG_LATEST=$(curl -s https://api.github.com/repos/rtaserver/RadiusMonitor/releases/latest | grep '"tag_name":' | cut -d '"' -f 4)
TAG=$(echo "$TAG_LATEST" | sed 's/^v//')
IPK="luci-app-radius-monitor_${TAG}_all.ipk"
curl -s -L -o "/tmp/${IPK}" "https://mirror.ghproxy.com/https://github.com/rtaserver/RadiusMonitor/releases/latest/download/${IPK}"

# install ipks
# check if the package is already installed and its version
INSTALLED_VERSION=$(opkg info luci-app-radius-monitor | grep 'Version:' | cut -d ' ' -f 2)

if [ "$INSTALLED_VERSION" = "$TAG" ]; then
    echo "The same version ($TAG) is already installed, forcing reinstallation"
    opkg install --force-reinstall /tmp/${IPK}
else
    echo "installing version $TAG"
    opkg install /tmp/${IPK}
fi
if [ $? -ne 0 ]; then
    clear
    echo "Installation failed"
    echo "Check Your Internet Connection"
    echo "Please try again"
    rm -f /tmp/${IPK}
    exit 1
fi

rm -f /tmp/${IPK}

echo "Installation success"