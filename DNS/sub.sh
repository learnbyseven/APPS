subscription-manager remove --all
subscription-manager unregister
subscription-manager clean
subscription-manager register --username rhn-support-grajawat --password 
subscription-manager attach --pool=
subscription-manager repos --enable={rhel-7-server-rpms,rhel-7-server-optional-rpms,rhel-7-server-extras-rpms,rhel-7-server-ose-3.7-rpms,rhel-7-fast-datapath-rpms}
