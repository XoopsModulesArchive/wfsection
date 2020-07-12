<?php
// $Id: admin.php,v 1.4 2004/09/23 12:51:24 bender Exp $
// ------------------------------------------------------------------------ //
// WFsections for XOOPS                               //
// Copyright (c) 2004 WF-section Team                        //
// <http://www.wf-projects.com/>                          //
// ------------------------------------------------------------------------ //
// This program is free software; you can redistribute it and/or modify     //
// it under the terms of the GNU General Public License as published by     //
// the Free Software Foundation; either version 2 of the License, or        //
// (at your option) any later version.                                      //
// //
// You may not change or alter any portion of this comment or credits       //
// of supporting developers from this source code or any supporting         //
// source code which is considered copyrighted (c) material of the          //
// original comment or credit authors.                                      //
// //
// This program is distributed in the hope that it will be useful,          //
// but WITHOUT ANY WARRANTY; without even the implied warranty of           //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
// GNU General Public License for more details.                             //
// //
// You should have received a copy of the GNU General Public License        //
// along with this program; if not, write to the Free Software              //
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------ //
// Author: WF-section Team                                                   //
// URL: http://www.wf-projects.com                                         //
// Project: WFsections Project                                               //
// ------------------------------------------------------------------------- //
// Translator: Mr Translatro                                                 //
// URL: http://translator.com                                                //
// Email: translator@translator.com                                          //
// ------------------------------------------------------------------------- //
// %%%%%%        Admin Module Name  Documents         %%%%%
Global $xoopsConfig;
// Action Lang defines
define( "_AM_WFS_YES", "Yes" );
define( "_AM_WFS_NO", "No" );
define( "_AM_WFS_SAVE", "����" );
define( "_AM_WFS_SAVECHANGE", "����ı�" );
define( "_AM_WFS_ADD", "����" );
define( "_AM_WFS_EDIT", "�༭" );
define( "_AM_WFS_MODIFY", "�޸�" );
define( "_AM_WFS_DELETE", "ɾ��" );
define( "_AM_WFS_CANCEL", "ȡ��" );
define( "_AM_WFS_ACTION", "����" );
define( "_AM_WFS_COPY1", "��¡" );
define( "_AM_WFS_NOARTICLEFOUND", "֪ͨ��û��ƥ�䱾���Ե�����" );
define( "_AM_WFS_DISABLEHTML", "����HTML��ǩ" );
define( "_AM_WFS_DISABLESMILEY", "����Smilie Icons" );
define( "_AM_WFS_DISABLEXCODE", "����XOOPS Codes" );
define( "_AM_WFS_DISABLEIMAGES", "����ͼƬImages" );
define( "_AM_WFS_DISABLEBREAK", "ʹ��XOOPS linebreakת����" );
define( "_AM_WFS_STRIPHTML", "����HTML��ǩ" );
define( "_AM_WFS_CLEANHTML", "���벻��Ҫ��MS Word��ǩ" );
define( "_AM_WFS_NORIGHTS", "��û���㹻��Ȩ�����ʴ�����" );

/**
 * Database defines
 */
define( "_AD_DBERROR", "��������Ϣ�����ݿ���ʱ��������<br /><br />�뱨��� <a href=\"http://www.wf-projects.com\" target=\"_blank\">WF-sections֧��վ��</a><br /><br />Copy and paste the error below to ensure we can quickly help you." );
define( '_AM_WFS_WFSECTIONCONFIG', '���ø���' );
define( '_AM_WFS_WFPATHCONFIG', '·�����ø���' );
define( '_AM_WFS_WFTEMPLATESCONFIG', 'ģ�����' );
define( "_AM_WFS_DBUPDATED", "���ݿ�ɹ����£�" );
/**
 * Lang defines for breadcrumb system
 */
define( '_AM_WFS_BREADC1', '����' );
define( '_AM_WFS_BREADC2', '������' );
define( '_AM_WFS_BREADC3', 'Ȩ��' );
define( '_AM_WFS_BREADC4', '����' );
define( '_AM_WFS_BREADC5', '·��' );
define( '_AM_WFS_BREADC6', 'ģ��' );
define( "_AM_WFS_BREADC7", "����ģ��" );
define( "_AM_WFS_BREADC8", "����" );
define( "_AM_WFS_BREADC9", "����" );
/**
 * Lang defines for menu system
 */
define( '_AM_WFS_ADMENU1', 'ҳ�����' );
define( '_AM_WFS_ADMENU2', '������' );
define( '_AM_WFS_ADMENU3', '��������' );
define( '_AM_WFS_ADMENU4', 'Ȩ�ع���' );
define( '_AM_WFS_ADMENU5', '���»ָ�' );
define( '_AM_WFS_ADMENU6', '��������' );
define( '_AM_WFS_ADMENU7', '�������' );
define( '_AM_WFS_ADMENU8', '�������' );
define( '_AM_WFS_ADMENU9', '���½���' );
define( "_AM_WFS_ADMENUA", "Mimetypes����" );
define( '_AM_WFS_ADMENUB', '��������' );
define( '_AM_WFS_ADMENUC', 'ͶƱ��Ϣ' );
define( "_AM_WFS_ADMENUD", "����" );
define( "_AM_WFS_ADMENUE", "������״̬" );
define( "_AM_WFS_ADMENUF", "�ϴ�ͼƬ" );
/**
 * Summary information
 */
define( "_AM_WFS_SUMMARYINFO1", "��Ҫ��Ϣ" );
define( "_AM_WFS_SUMMARYINFO2", "���" );
define( "_AM_WFS_SUMMARYINFO3", "����" );
define( '_AM_WFS_SUMMARYINFO4', '�ύ' );
define( '_AM_WFS_SUMMARYINFO5', '�޸�' );
define( '_AM_WFS_SUMMARYINFO6', '�ж�' );
define( "_AM_WFS_SUMMARYINFO7", "�༭ģʽ�µ�����" );
/**
 * allarticles document management
 */
define( "_AM_WFS_ARTICLEMANAGEMENT", "���¹���" );
define( "_AM_WFS_DOC_SELECTION", "����ѡ��" );
define( "_AM_WFS_LIST", "<b>�г�</b> " );
define( "_AM_WFS_LISTINCAT", " <b>�������</b> " );
/**
 * List article types
 */
define( "_AM_WFS_ALLARTICLES", "��������" );
define( "_AM_WFS_PUBLARTICLES", "����������" );
define( "_AM_WFS_SUBLARTICLES", "�ύ������" );
define( "_AM_WFS_ONLINARTICLES", "��������" );
define( "_AM_WFS_OFFLIARTICLES", "��������" );
define( "_AM_WFS_EXPIREDARTICLES", "��������" );
define( "_AM_WFS_AUTOEXPIREARTICLES", "�Զ���������" );
define( "_AM_WFS_AUTOARTICLES", "�Զ���������" );
define( "_AM_WFS_NOSHOWARTICLES", "����������" );
define( "_AM_WFS_HTMLFILES", "HTML�ļ�����" );
/**
 * menu lang defines
 */
define( "_AM_WFS_ALLTXTHEAD", "���¹���" );
define( "_AM_WFS_ALLTXT", "<div>With <b>���¹���</b>�����Ա༭��ɾ�������������¡���ģʽ����ʾ���ݿ��е�ÿƪ���¡�" );
define( "_AM_WFS_PUBLISHEDTXTHEAD", "����������" );
define( "_AM_WFS_PUBLISHEDTXT", "<div><b>���·�������</b>����ʾ�����ѷ��������¡�����վ����˵ģ���<br /><br />��Щ�����н���ʾ�������嵥�е����£����������������Ȩ�����Ƶ����£�." ); //added
define( "_AM_WFS_SUBMITTEDTXTHEAD", "�ύ����" );
define( "_AM_WFS_SUBMITTEDTXT", "<div><b>�����ύ����</b>����ʾ������վ���û��ύ�����¹���ˡ�<br /><br />Ҫ���һƪ���£�����<b>�༭</b>���ӣ�Ȼ��ѡ��<b>���</b>��ѡ�򱣴����¡��ύ�����½���������" ); //added
define( "_AM_WFS_ONLINETXTHEAD", "��������" );
define( "_AM_WFS_ONLINETXT", "<div><b>�������߹���</b>����ʾ����'����'���¡�<br /><br />Ҫ�ı����µ�״̬������<b>�༭</b>���Ӳ�ѡ��<b>����</b>��ѡ��off/on��" ); //added
define( "_AM_WFS_OFFLINETXTHEAD", "��������" );
define( "_AM_WFS_OFFLINETXT", "<div><b>�������߹���</b>����ʾ����״̬�趨Ϊ<b>����</b>�����¡�<br /><br />Ҫ�ı����µ�״̬������ <b>�༭</b>���Ӳ�ѡ��<b>����</b>��ѡ��off/on." ); //added
define( "_AM_WFS_EXPIREDTXTHEAD", "��������" );
define( "_AM_WFS_EXPIREDTXT", "<div><b>���¹��ڹ���</b>����ʾ���й������¡�<br /><br />������ͨ������<b>�༭</b>���Ӳ��޸�<b>���ù���ʱ��</b>��������ù���ʱ�䡣" ); //added
define( "_AM_WFS_AUTOEXPIRETXTHEAD", "�Զ���������" );
define( "_AM_WFS_AUTOEXPIRETXT", "<div><b>�����Զ����ڹ���</b>����ʾ�����趨Ϊĳһ���ڹ��ڵ����¡�<br /><br />������ͨ������<b>�༭</b>���Ӳ��޸�<b>���ù���ʱ��</b>���ù����ա�" ); //added
define( "_AM_WFS_AUTOTXTHEAD", "Auto Documents" );
define( "_AM_WFS_AUTOTXT", "<div><b>�����Զ���������</b>����ʾ�����趨Ϊ����ĳʱ���������¡�<br /><br />���ÿ���ͨ������<b>�༭</b>���Ӳ��޸�'���÷�������'�������޸ġ�" ); //added
define( "_AM_WFS_NOSHOWTXTHEAD", "����������" );
define( "_AM_WFS_NOSHOWTXT", "<div><b>����������</b>��Щ��һЩ�ض����͵����£����������²�ͬ�����ǽ�����ʾ������ҳ��&nbsp;&nbsp; ������ʾ��'WF-sections�˵�'���顣<br /><br />��'����ѡ����HTML�ļ�������', `��WF-sections���`��'����������'һ��ʹ�����ѡ�� (�༭����ҳ�ϵ�ѡ��)�����԰�����ϣ���ķ�ʽ��ʾ��&nbsp;&nbsp;���ӿ�����һ�� `��˽����` ҳ�ȡ�<br /><br />��������ѡ��Ҳ���ƴ��������¡����磬���������ڣ���/�������õȡ�" ); //added
define( "_AM_WFS_HTMLFILESTXTHEAD", "HTML����" );
define( "_AM_WFS_HTMLFILESTXT", "HTML�ļ����¡��⽫��ʾ���и��������ӡ�HTML�ļ������¡�" ); //added
/**
 * Article listing defines
 */
define( "_AM_WFS_STORYID", "ID" );
define( "_AM_WFS_TITLE", "����" );
define( "_AM_WFS_POSTER", "����" );
define( "_AM_WFS_VERSION", "�汾" );
define( "_AM_WFS_SECTION", "���" );
define( "_AM_WFS_STATUS", "״̬" );
define( "_AM_WFS_WEIGHT", "Ȩ��" );

define( "_AM_WFS_SUBMITTED2", "�ύ����" );
define( "_AM_WFS_PUBLISHED", "��������" );
define( "_AM_WFS_PUBLISHEDON", "��������" );
define( "_AM_WFS_SUBMITTED", "�û��ύ����" );
define( "_AM_WFS_NOTPUBLISHED", "δ����" );
define( "_AM_WFS_EXPARTS", "��������" );
define( "_AM_WFS_EXPIRED", "�Զ�������" );
define( "_AM_WFS_CREATED", "��������" );
/**
 * Blocks Management
 */
define( "_AM_WFS_BLOCKSHEADING", "�������" );
define( "_AM_WFS_BLOCKSINFO", "������Ϣ" );
define( "_AM_WFS_BLOCKSTEXT", "������Դ�ϵͳ=>����������á�<br />������ʾWFsection���顣��Ҳ���Դ�\"�༭\"���༭��" );
/**
 * Path Managment
 */
define( "_AM_WFS_PATHCONFIGURATION", "·������" );
define( "_AM_WFS_PATHCONFIG", "·����Ȩ������" );
define( "_AM_WFS_FILEPATHWARNING", "<li>ΪWF-sectionsʹ�õ�Ŀ¼����·����
	<li>���ʹ�õ�·������ȷ������һ�����档
	<li>�����ϣ��WF-sectionsʹ��ȱʡ·���Ͳ�Ҫ��д��" );
define( "_AM_WFS_FILEPATH", "·������" );
define( "_AM_WFS_FILEUSEPATH", "�ı��û�·��" );
define( "_AM_WFS_PATHEXIST", "·���Ѵ��ڣ�" );
define( "_AM_WFS_PATHNOTEXIST", "·�������ڡ�" );
define( "_AM_WFS_THUMBPATHEXIST", "·�����ڣ�" );
define( "_AM_WFS_THUMBPATHNOTEXIST", "·�������ڡ�" );
define( "_AM_WFS_PATHCHECK", "<b>·��У�飺</b> " );
define( "_AM_WFS_PERMISSIONS", "<b>·��Ȩ��У�飺</b>" );
define( "_AM_WFS_THUMBPATHCHECK", "<b>����ͼ·��У�飺</b> " );
define( "_AM_WFS_THUMBPERMISSIONS", "<b>����ͼ�ļ���Ȩ��У�飺</b>" );
define( "_AM_WFS_RESETDEFUALTS", "����·��ȱʡֵ" );
define( "_AM_WFS_REVERTED", "·���ָ���ԭʼ����" );
/**
 * Path Management form defines
 */
define( "_AM_WFS_CMODERROR", "Ȩ�޴�����Ѵ�·����Ȩ������Ϊ0777��" );
define( "_AM_WFS_CMODERRORNOTCORRECTED", "��Ȩ�޲���ȷ��" );
define( "_AM_WFS_AGRAPHICPATH", "����ͼƬ·����<div style='padding-top: 8px;'><span style='font-weight: normal;'>����logoͼƬ�Ĵ��·����</span></div>" );
define( "_AM_WFS_SGRAPHICPATH", "���ͼƬ·����<div style='padding-top: 8px;'><span style='font-weight: normal;'>���ͼƬ�Ĵ��·����</span></div>" );
define( "_AM_WFS_HTMLCPATH", "HTML�ļ�·����<div style='padding-top: 8px;'><span style='font-weight: normal;'>HTML�ļ����·����</span></div>" );
define( "_AM_WFS_LOGOPATH", "LogoͼƬ·����<div style='padding-top: 8px;'><span style='font-weight: normal;'>logoͼƬ���·����/span></div>" );
define( "_AM_WFS_FILEUPLOADSPATH", "�����ϴ�·����<div style='padding-top: 8px;'><span style='font-weight: normal;'>�����ϴ����·����</span></div>" );
define( "_AM_WFS_FILEUPLOADSTEMPPATH", "�����ϴ���ʱ·����<div style='padding-top: 8px;'><span style='font-weight: normal;'>·��������Ҫ����ɾ����</span></div>" );
define( "_AM_WFS_AVATARPATH", "Avatar����ͼ�ļ��У�<div style='padding-top: 8px;'><span style='font-weight: normal;'>��Ҫ���ļ��д���avatar����ͼ��<br />���·���������봴���ļ��С�</span></div> " );
/**
 * Template management
 */
define( '_AM_WFS_MODIFYTEMPLATES', 'ģ�����' );
define( '_AM_WFS_USINGTEMPLATES', 'ʹ��ģ��' );
define( '_AM_WFS_HOWTOUSETEMP', "<li>�����ڿ���Ϊÿ����WF-sectionsѡ��ʹ����һ��ģ�塣<br /><li><b>���棺</b>�����ʹ�ý������վ��ɲ���Ԥ֪��Ӱ�죬�������ȷ������ô��ǿ�ҽ���������ȱʡֵ��" );
define( '_AM_WFS_ADDINGATEMPLATE', "<b>����һ��ģ��</b>" );
define( '_AM_WFS_HOWTOUSETEMP2', "<li>Ҫ����һ����ģ�壬�뿽��ģ���ļ���WF-sectionsģ���ļ��С�<br /><li>Ȼ��������ͨ��<a href='../../../modules/system/admin.php?fct=modulesadmin&op=update&module=wfsection'>System Admin/Modules</a>����WF-sections��ʹ�޸���Ч��<br /><li>����ʧ��������ҳ��" );
define( '_AM_WFS_DISPLAYXOOPSTEMPADMIN', 'Xoopsģ�����ù���' );
define( '_AM_WFS_NONBLOCKS', '��ģ��' );
define( '_AM_WFS_ISBLOCKS', '����ģ��' );
define( '_AM_WFS_TEMPLDOWNLOADS', '����ģ��' );
define( '_AM_WFS_TEMPLARCHIVES', '���¹鵵ģ��' );
define( '_AM_WFS_TEMPLARTINDEX', '��������ģ��' );
define( '_AM_WFS_TEMPLSECINDEX', '�������ģ��' );
define( '_AM_WFS_TEMPLART', '����ҳ��������Ϣ(ȱʡ)' );
define( '_AM_WFS_TEMPLPLAINART', '����ҳ��û��Frame����' );
define( '_AM_WFS_TEMPLTOPTEN', 'Top 10ҳ��ģ��' );
define( '_AM_WFS_ARTMENUBLOCK', '���²˵�����' );
define( '_AM_WFS_BIGSTORYBLOCK', '�ش���������' );
define( '_AM_WFS_MAINMENUBLOCK', '���˵�����' );
define( '_AM_WFS_NEWARTBLOCK', '����������' );
define( '_AM_WFS_NEWDOWNBLOCK', 'WF-sections��������' );
define( '_AM_WFS_TOPARTBLOCK', 'Top��������' );
define( '_AM_WFS_TOPICSBLOCK', '�������' );
define( '_AM_WFS_SPOTLIGHTBLOCK', '��������' );
define( '_AM_WFS_NEWDOWNLOADSBLOCK', '����������' );
define( '_AM_WFS_AUTHORBLOCK', '������Ϣ����' );
define( "_AM_WFS_VIEW", "���" );
/**
 * Indexpage management
 */
define( '_AM_WFS_INDEXPAGE', 'ҵ����' );
define( '_AM_WFS_INDEXPAGEINFO', 'ҳ������Ϣ' );
define( '_AM_WFS_INDEXPAGEINFOTXT', '<li>������������\'���\'��ҳWF-sections��<li>���������׸ı�ͼƬlogo��ҳͷ��������ͷ��ҳ�������Զ�����ۡ�' );
define( '_AM_WFS_INDEXPAGELISTING', 'ҳ�����б�' );

define( "_AM_WFS_PAGENAME2", "ҳ��" );
define( "_AM_WFS_MODIFYPAGE", "�޸���ҳ" );
define( "_AM_WFS_ADDPAGE", "������ҳ" );
define( "_AM_WFS_INDEXHEADING", "ҳ���⣺" );
define( "_AM_WFS_INDEXHEADING2", "ҳ����" );
define( '_AM_WFS_INDEXPAGEEDIT', '�༭ҳ' );
define( "_AM_WFS_SECTIONIMAGE", "ҳͼƬ��" );
define( "_AM_WFS_SECTIONHEAD", "ҳͷ���֣�" );
define( "_AM_WFS_SECTIONFOOT", "ҳ�����֣�" );
define( "_AM_WFS_ALIGNMENT", "<b>ҳ���룺</b>" );
define( "_AM_WFS_ISDEFAULT", "ȱʡ" );
define( "_AM_WFS_PAGENAME", "ҳ����" );
/**
 * include for wfs_admin wfsection admin permissions
 */
include_once 'wfs_admin_lang.php';
/**
 * include for wfssection icons
 */
include_once 'wfs_icons_lang.php';
/**
 * include for wfssection uploader
 */
include_once 'wfs_icons_upload.php';
/**
 * not done from here
 */
// define('_AM_WFS_ADMENU12', 'WF-sections Admin Management');
define( "_AM_WFS_MINDEX_ACTION", "����" );
define( "_AM_WFS_MINDEX_PAGE", "<b>ҳ��<b> " );
// Database Lang defines
define( "_AM_WFS_RUSUREDEL", "����ɾ��������" );
define( "_AM_WFS_NOTEIMGRESIZE", "ͼƬ�ѱ�����Ϊ��160 x Width: 200" );
// section Lang Defines
define( "_AM_WFS_CATEGORY", "������" );
define( "_AM_WFS_CATEGORYNAME", "�����⣺" );
define( "_AM_WFS_SECTIONPAGEDETAILS", "���ҳϸ��" );
define( "_AM_WFS_TEXTOPTIONS", "���ָ�ʽѡ�" );
define( "_AM_WFS_GROUPPROMPT", "������Ȩ��<div style='padding-top: 8px;'><span style='font-weight: normal;'>ѡ����Ȩ���ʴ������û��顣</span></div>" );
define( "_AM_WFS_IN", "����һ�������<div style='padding-top: 8px;'><span style='font-weight: normal;'>�����հ״���һ���������</span></div>" );
define( "_AM_WFS_MOVETO", "�ƶ������" );
define( "_AM_WFS_CATEGORYWEIGHT", "���Ȩ�أ�<div style='padding-top: 8px;'><span style='font-weight: normal;'>���������ʾ˳��0���</span></div>" );
define( "_AM_WFS_CATEGORYDESC", "���������<div style='padding-top: 8px;'><span style='font-weight: normal;'>�������֡�û��HTML��Xoops Codes</span></div>" );
define( "_AM_WFS_ADDMCATEGORY", "���������" );
define( "_AM_WFS_CATEGORYTAKEMETO", "�����˴�����һ�������" );
define( "_AM_WFS_NOCATEGORY", "���� - û�д������" );
define( "_AM_WFS_MODIFYCATEGORY", "�޸����" );
define( "_AM_WFS_MOVECATEGORY", "�ƶ��������" );
define( "_AM_WFS_MOVEDEL", "�ƶ�����" );
define( "_AM_WFS_EDITSECTION2", "�ƶ��������½������ڴ�����С�" );
define( "_AM_WFS_MOVE", "�ƶ�" );
define( "_AM_WFS_MOVEARTICLES", "�ƶ����µ����" );
define( '_AM_WFS_DUPLICATECATEGORY', '�������' );
define( '_AM_WFS_COPY', '�������' );
define( '_AM_WFS_TO', '����' );
define( '_AM_WFS_NEWCATEGORYNAME', '�������⣺' );
define( '_AM_WFS_DUPLICATE', '����' );
define( '_AM_WFS_DUPLICATEWSUBS', '���������' );
define( "_AM_WFS_SECTIONCOPYARTICLES", "ͬʱ������������£�" );
define( "_AM_WFS_ADDSECTIONTOMENU", "�������Xoops���˵���" );
define( "_AM_WFS_SECTIONTEMPLATE", "ѡ�����ģ�壺" );
define( "_AM_WFS_SHOWCATEGORYIMG", "<b>��ʾ���ͼƬ��&nbsp;</b>" );
define( "_AM_WFS_SECTIONIMAGEALIGN", "<b>ͼƬ���룺&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>" );
define( "_AM_WFS_SECTIONIMAGEOPTION", "���ͼƬѡ�" );
define( "_AM_WFS_SECTIONSTATUS", "���״̬��<div style='padding-top: 8px;'><span style='font-weight: normal;'>����Ϊ������������б�����ʾ����������Ϊ���ߣ���𽫱�����</span></div>" );
define( "_AM_WFS_CATEGORYHEAD", "���ͷ���֣�<div style='padding-top: 8px;'><span style='font-weight: normal;'>�����򴴽������</span></div>" );
define( "_AM_WFS_CATEGORYFOOT", "�������֣�<div style='padding-top: 8px;'><span style='font-weight: normal;'>�����򴴽������</span></div>" );
define( "_AM_WFS_GROUPCREATEPROMPT", "���´���Ȩ��<div style='padding-top: 8px;'><span style='font-weight: normal;'>ѡ������ڴ���𴴽����µ��û��顣</span></div>" );
// Document Lang defines
define( "_AM_WFS_ADDNEWAUTH", "ѡ��������" );
define( "_AM_WFS_EDITARTICLE", "���¹�����Ϣ" );
define( "_AM_WFS_MENU_LINKS", "WF-sections�˵�" );
// define("_AM_WFS_ARTICLEMANAGEMENT", "���¹���");
define( "_AM_WFS_ARTICLEPREVIEW", "����Ԥ��" );
define( "_AM_WFS_WAYSYWTDTTAL", "���棺��ȷʵ��ɾ����������������������" );
define( "_AM_WFS_CATEGORYSMNGR", "������" );
define( "_AM_WFS_PEARTICLES", "����������" );
define( "_AM_WFS_GENERALCONF", "һ������" );
define( "_AM_WFS_UPDATEFAIL", "�޸�ʧ�ܡ�" );
define( "_AM_WFS_EDITFILE", "�༭����" );
define( "_AM_WFS_FILEDEL", "���棺��ȷʵ��ɾ�����ļ���" );
define( "_AM_WFS_IMGNAME", "�ļ������գ���ԭ���ϴ����ļ�����ͬ��" );
define( "_AM_WFS_UPLOADED", "�ϴ���" );
define( "_AM_WFS_ISNOTWRITABLE", "����д��" );
define( "_AM_WFS_UPLOADFAIL", "���棺�ϴ�ʧ�ܡ�ԭ��" );
define( "_AM_WFS_NOTALLOWEDMIMETYPE", "Mimetype: %s <br />��չ����.%s <br />��δ������ϴ��������ļ���" );
define( "_AM_WFS_FILETOOBIG", "�ļ���С���������ϴ��Ĵ�С��" );
define( "_AM_WFS_IMAGEALIGN", "����ͼƬ���룺" );
define( "_AM_WFS_ARTICLEPAGEMENU", "����ҳ����" );
define( "_AM_WFS_BLOCKMENU", "��������" );
define( "_AM_WFS_ADMINEDITMENU", "����һ������" );
define( "_AM_WFS_ADMINCONFIGMENU", "��������" );
define( "_AM_WFS_SELECTITEM", "ѡ��" );
define( "_AM_WFS_SPOTLIGHT", "�����������н�����ģ�" );
define( "_AM_WFS_SPOTLIGHTMAIN", "���������н�����ģ�" );
define( "_AM_WFS_SPOTLIGHTSPONSER", "�����������������£�" );
define( "_AM_WFS_MENU", "��������" );
define( "_AM_WFS_EDITMAINTEXT", "3. �������£���ȱʡ��<div style='padding-top: 8px;'><span style='font-weight: normal;'>������%s</span></div> " );
define( "_AM_WFS_DOC_RESTORE", "�ָ������µ�ǰһ���汾" );
/**
 * all article information text
 */
define( "_AM_WFS_CMODHEADER", "�ļ�Ȩ�޼��" );
define( "_AM_WFS_FILE", "�ļ���" );
define( "_AM_WFS_NOMAINTEXT", "��������������û��Text/Html�����²���Ϊ�գ�" );
define( "_AM_WFS_PATH", "·����" );
define( "_AM_WFS_ARTICLEMENU", "������������" );
define( "_AM_WFS_APPROVE", "���" );
define( "_AM_WFS_MOVETOTOP", "�ƶ����ĵ�����" );
define( "_AM_WFS_CHANGEDATETIME", "�ı䷢��ʱ��" );
define( "_AM_WFS_NOWSETTIME", "�������趨Ϊ��%s" );
define( "_AM_WFS_CURRENTTIME", "��ǰʱ���ԣ�%s" );
define( "_AM_WFS_SETDATETIME", "���÷�������/ʱ��" );
define( "_AM_WFS_MONTHC", "�£�" );
define( "_AM_WFS_DAYC", "�գ�" );
define( "_AM_WFS_YEARC", "�꣺" );
define( "_AM_WFS_TIMEC", "ʱ�䣺" );
define( "_AM_WFS_IMAGES", "ͼƬ����" );
define( "_AM_WFS_BROKENDOWNLOADS", "����" );
define( "_AM_WFS_BROKENDOWNLOADSTEXT", "������Ϣ" );
define( "_AM_WFS_NOBROKEN", "û���ж��ļ��ı��档" );
define( "_AM_WFS_IGNORE", "����" );
define( "_AM_WFS_FILEDELETED", "�ļ�ɾ����" );
define( "_AM_WFS_BROKENDELETED", "�ж��ļ�����ɾ����" );
define( '_AM_WFS_BROKENTEXT', '<li>���ԣ����Ա��棬��ɾ��<b>�ж��ļ����档</b>
<li>Edit ���༭���޸ĸ�������
<li>ɾ����ɾ��<b>�������������</b>���ļ���<b>�ж��ļ�����</b>����' );
define( "_AM_WFS_REPORTER", "���淢����" );
define( "_AM_WFS_FILETITLE", "���ر���" );
define( "_AM_WFS_ARTICLETITLE", "���±���" );
define( "_AM_WFS_UPLOAD", "�ϴ�" );
define( "_AM_WFS_VIEWHTML", "�༭HTML" );
define( "_AM_WFS_VIEWWAYSIWIG", "�༭WYSIWYG" );
define( "_AM_WFS_ARTICLEMANAGE", "�ļ�����" );
define( "_AM_WFS_WEIGHTMANAGE", "Ȩ�ع���" );
define( "_AM_WFS_UPLOADMAN", "�ļ�����" );
define( "_AM_WFS_NOADMINRIGHTS", "�Բ��𣬽�վ�����Ըı�WF-sections����" );
define( "_AM_WFS_CANNOTHAVECATTHERE", "������������Լ�������𣡣�" );
define( "_AM_WFS_SECTIONMANAGE", "������" );
define( "_AM_WFS_FILEID", "�ļ�" );
define( "_AM_WFS_FILEICON", "Icon" );
define( "_AM_WFS_FILESTORE", "��Ϊ" );
define( "_AM_WFS_REALFILENAME", "��ʵ����" );
define( "_AM_WFS_USERFILENAME", "�û���" );
define( "_AM_WFS_FILEMIMETYPE", "�ļ�����" );
define( "_AM_WFS_FILESIZE", "�ļ���С" );
define( "_AM_WFS_CHANGEEXPDATETIME", "�ı��������/ʱ��" );
define( "_AM_WFS_SETEXPDATETIME", "���ù�������/ʱ��" );
define( "_AM_WFS_NOWSETEXPTIME", "���¹���������Ϊ��%s" );
define( "_AM_WFS_ALLOWCOMENTS", "��ʾ�����µ�Xoops���ۣ�" );
define( "_AM_WFS_COMMENT", "����" );
define( "_AM_WFS_EDITSERVERFILE", "�༭����Ȩ�ļ�" );
define( "_AM_WFS_CURRENTFILENAME", "��ǰ�ļ�����" );
define( "_AM_WFS_CURRENTFILESIZE", "�ļ���С��" );
define( "_AM_WFS_UPLOADFOLD", "�ϴ��ļ��У�" );
define( "_AM_WFS_UPLOADPATH", "·����" );
define( "_AM_WFS_FREEDISKSPACE", "���ɿռ䣺" );
define( "_AM_WFS_RENAMEFILE", "�������ļ�" );
define( "_AM_WFS_ARTICLEWEIGHT", "����Ȩ��" );
define( '_AM_WFS_MODIFYFILE', '�޸������ļ�' );
define( '_AM_WFS_FILESTATS', '����״̬' );
define( '_AM_WFS_FILESTAT', '���µ��ļ�״̬��' );
define( '_AM_WFS_IMGESIZETOBIG', 'ͼƬ�߶�/��ȴ������ֵ������ߴ磺�߶ȣ�%s x ��ȣ�%s <br />�ϴ�ͼƬ�ߴ磺�߶ȣ�%s x ��ȣ�%s' );
define( '_AM_WFS_CATREORDERTEXT', '<li>�������ڴ˴��ı䵱ǰ��������Ȩ�ء�<br /><li>ÿ���������°�Ȩ����ʾ��<br /><li>��������ɫ�������ǳ���ͻҡ�</li><br /><li>Ҫ�������������򣬵���������ͻ���ʾ�����б�</li>' );
define( '_AM_WFS_ATTACHFILEACCESS', '����Ȩ��������ͬ�����ڱ༭����ʱ�����޸ġ�' );
define( '_AM_WFS_WFSFILESHOW', '����' );
define( '_AM_WFS_ATTACHEDFILE', '�ļ��ϴ���Ϣ' );
define( '_AM_WFS_TDISPLAYSATTACHEDFILES', '<li>���и�������ID˳����ʾ��<br /><li>�������ڴ˴��༭��ɾ���ļ���' );
define( '_AM_WFS_VOTEDATA', '��ʾͶƱ��' );
define( '_AM_WFS_VOTEDATATEXT', '<li>ͶƱ���ݽ���ID˳����ʾ��' );
define( '_AM_WFS_ATTACHEDFILEM', '���ع���' );
define( '_AM_WFS_UPOADMANAGE', '�ļ�����' );
define( '_AM_WFS_CAREORDER', 'Ȩ�ع���' );
define( '_AM_WFS_CAREORDER2', '��������Ȩ��' );
define( '_AM_WFS_CAREORDER3', '��������Ȩ��' );
define( "_AM_WFS_EDITHTMLFILE", "2. HTML���£�<div style='padding-top: 8px;'><span style='font-weight: normal;'>�ļ�������ҳ�����ġ�</span></div>" );
define( "_AM_WFS_DOCTITLE", "ʹ��HTML���±���" );
define( "_AM_WFS_DOHTMLDB", "���뵽���ݿ�" );
define( "_AM_WFS_EDITCONNECTFILE", "����ҳ��" );
define( "_AM_WFS_EDITHTMLFILEEDIT", "�༭ѡ����HTML�ļ���" );
define( "_AM_WFS_EDITWORDBROWSE", "ѡ��Word����" );
define( "_AM_WFS_EDITWORDDOCUMENT", "�༭ѡ����Word���£�" );
define( '_AM_WFS_EDITGROUPPROMPT', "���·���Ȩ��<div style='padding-top: 8px;'><span style='font-weight: normal;'>ѡ����Ȩ���ʴ����µ��û��顣</span></div>" );
define( "_AM_WFS_EDITSECTION", "���������<div style='padding-top: 8px;'><span style='font-weight: normal;'>���½���������ʾ�ڴ����</span></div>" );
define( "_AM_WFS_EDITWEIGHT", "����Ȩ�أ�<div style='padding-top: 8px;'><span style='font-weight: normal;'>����������ʾ˳��0 ��ߡ�����ȱʡ����˳����ΪȨ��ʱ��Ч��</span></div>" );
define( "_AM_WFS_EDITCAUTH", "�������ߣ�" );
define( "_AM_WFS_EDITCAUTH2", "�������ߣ�<div style='padding-top: 8px;font-weight: normal;color:red;'><br />���棺:<br />
������ı��˴��ĵ���������ʹ�õ������ı�����ǰ����ı䣡 <br />�����������������߳���300��վ�㣩</span></div>" );
define( "_AM_WFS_EDITLINKURL", "1. �������£�<div style='padding-top: 8px;'><span style='font-weight: normal;'>�������б�����ʾһ������һ��վ��/ҳ������ӡ�</span></div>" );
define( "_AM_WFS_EDITLINKURLADD", "URL��ַ��<br />" );
define( "_AM_WFS_EDITLINKURLNAME", "URL����<br />" );
define( "_AM_WFS_EDITARTICLETITLE", "���±��⣺<div style='padding-top: 8px;'><span style='font-weight: normal;'>��������</span></div>" );
define( "_AM_WFS_PUBLISHDATE", "���·������ڣ�" );
define( "_AM_WFS_EXPIREDATESET", "�����������ã�" );
define( "_AM_WFS_EXPIREDATE", "���¹����գ�" );
define( "_AM_WFS_CLEARPUBLISHDATE", "<br /><br />ɾ�������գ�" );
define( "_AM_WFS_CLEAREXPIREDATE", "<br /><br />ɾ�������գ�" );
define( "_AM_WFS_PUBLISHDATESET", "�����������ã�" );
define( "_AM_WFS_SETDATETIMEPUBLISH", "���÷�������/ʱ��" );
define( "_AM_WFS_SETDATETIMEEXPIRE", "���ù�������/ʱ��" );
define( "_AM_WFS_SETPUBLISHDATE", "<b>���÷������ڣ� </b>" );
define( "_AM_WFS_SETEXPIREDATE", "<b>���ù������ڣ�</b>" );
define( "_AM_WFS_EXPIREWARNING", "<br />���棺�����������ڷ�����ǰ��" );
define( "_AM_WFS_EDITSUMMARY", "���¸�Ҫ��<div style='padding-top: 8px;'><span style='font-weight: normal;'>����Ҫ�ı���</span></div>
<div style='padding-top: 8px;'><span style='font-weight: normal;'>�������б�����ʾһ������һ��վ��/ҳ������ӡ�</span></div>
" );
define( '_AM_WFS_EDITAUTOSUMMARY', 'ʹ���Զ���Ҫ' );
define( '_AM_WFS_EDITREMOVEIMAGES', 'ɾ���Զ���Ҫ��ͼƬ' );
define( '_AM_WFS_EDITSUMMARYAMOUNTW', '�Զ���Ҫ�ĳ��ȣ����֣�' );
define( '_AM_WFS_EDITSUMMARYAMOUNTC', '�Զ���Ҫ���ȣ����ַ���' );
define( "_AM_WFS_EDITMOVETOTOP", "��������״̬Ϊ��" );
define( "_AM_WFS_EDITAPPROVE", "��׼�����£�" );
define( "_AM_WFS_EDITALLOWCOMENTS", "�������۴�����" );
define( "_AM_WFS_EDITJUSTHTML", "��WF-sections���" );
define( '_AM_WFS_EDITNOSHOART', '����������' );
define( "_AM_WFS_EDITOFFLINE", "������������" );
define( "_AM_WFS_EDITMAINMENU", "�����¼���Xoops���˵�" );
define( "_AM_WFS_CHECKOUTOFARTICLE", "�ǳ�ǰһ���²��ض���" );
define( "_AM_WFS_SECTIONHASARTICLES", "���棺�б�ǿա��ƶ���Щ���²�ɾ�����" );
define( "_AM_WFS_CREATEDBY", "ԭ����" );
define( "_AM_WFS_LASTEDITBY", "���һ�α༭��" );
define( "_AM_WFS_CREATEDON", "�����ڣ�" );
define( "_AM_WFS_EDITEDON", "�༭�ڣ�" );
define( "_AM_WFS_ADDAFILETOTHISDOWNLOAD", "��һ���ļ�������" );
define( "_AM_WFS_WARNINGUNSAVEDDATA", "�����棺����δ��������ݽ���ʧ����" );
define( "_AM_WFS_EDITDISCUSSINFORUM", "���� '����̳����'�����£�" );
define( "_AM_WFS_EDITDISSUMMARYBREAKS", "�رո�Ҫ����ת����" );
define( "_AM_WFS_NAVIGATION", "����" );
define( "_AM_WFS_USECATEGORYACCESS", "����Ӧ�����Ȩ�ޣ�" );
define( '_AM_WFS_REORDERID', 'ID' );
define( '_AM_WFS_REORDERPID', 'PID' );
define( '_AM_WFS_REORDERTITLE', '����' );
define( '_AM_WFS_REORDERDESCRIPT', '����' );
define( '_AM_WFS_REORDERWEIGHT', 'Ȩ��' );
define( '_AM_WFS_REORDERSUMMARY', '��Ҫ' );
define( "_AM_WFS_EXTRADOC_TEXT", "<div style='padding-top: 8px;'><b>Page Break</b>: <span style='font-weight: normal;'>ʹ�� [pagebreak]�����·ָ��ɽ�С�ĳ��浼����ҳ�档</span></div>
<div style='padding-top: 8px;'><b>PageNav Breaks</b>: <br /><span style='font-weight: normal;'>ʹ��[title]��������[/title]��һƪ���·ָ����ñ��⵼���Ķ��ҳ�档<br />������ʹ��[subtitle]�ӱ���[/subtitle]��ÿ����ҳһ���ӱ��⡣</span></div>
" );
/**
 * Main Configuration
 */
define( "_AM_WFS_WFSECTIONMAINCONFIG", "�ۺ�����" );
define( "_AM_WFS_WFSECTIONMAINCONFIGTEXT", "<li>�˴��������ı�󲿷�WF-sections���á�<br /><li>���Ķ������˽����ϸ��" );
define( "_AM_WFS_SECTIONSETTINGS", "��������Ϣ" );
define( "_AM_WFS_SECTIONSETTINGSTEXT", "<li>�����ڴ˴�Ϊ����վ�㴴��һ������������ƴ�����µ�'�ļ���'��<br /><li>�������ڴ˷���ش������޸ĺ�ɾ�����<br /><li>���Ķ������˽Ȿ��ɫ�����ʹ�÷�����" );
define( "_AM_WFS_MODIFICATION", "�޸�����" );
define( "_AM_WFS_MODIFICATIONINFO", "�޸�������Ϣ" );
define( "_AM_WFS_MODIFICATIONTEXT", "<li>�����г����б��޸������ύ��˵����¡�<br /><li>������������޸Ļ�˶���Щ�ı䡣" );
/**
 * Index Page management
 */

/**
 * Copyright and Support.  Please do not remove this line as this is part of the only copyright agreement for using WF-sections
 */
define( '_AM_WFS_VISITSUPPORT', '����WF-sectionsվ���˽�������Ϣ�����º�ʹ�ð�����<br /> WF-sections v1 Catzwolf &copy; 2003 <a href="http://www.wf-projects.com/" target="_blank">WF-sections</a>' );
// new constants by frankblack
define( '_AM_WFS_CLEAN', '���' );
define( '_AM_WFS_PREVIEW', 'Ԥ��' );
define( '_AM_WFS_NOARTWITHINCAT', '�����û������' );
define( '_AM_WFS_RETCATREORDER', '�������������' );
define( '_AM_WFS_ARTREORDER', '�����ѱ�������' );
define( '_AM_WFS_CATREORDER', 'ѡ��������ѱ�������' );
define( '_AM_WFS_NOFILESFOUND', 'δ�ҵ��ļ�' );
define( '_AM_WFS_TOTALATTFILES', '�����ܼƣ�' );
define( '_AM_WFS_NOARTFOUND', 'δ�ҵ�����' );
define( '_AM_WFS_WEIGHTMUSTNUMBER', 'Ȩ�ر�������ֵ��' );
define( '_AM_WFS_FILENAME', '�ļ���' );
define( '_AM_WFS_FILETYPE', '����' );
define( '_AM_WFS_FILEMODIFIED', '�޸�' );
define( '_AM_WFS_FILEATTRIBUTES', '����' );
define( '_AM_WFS_FILEACTIONS', '����' );
define( '_AM_WFS_ALTFOLDER', '�ļ���' );
define( '_AM_WFS_ALTCHANGEFOLDER', '�޸�' );
define( '_AM_WFS_ALTRENAMEFILE', '������' );
define( '_AM_WFS_ALTEDITFILE', '�༭' );
define( '_AM_WFS_ALTDELFILE', 'ɾ��' );
define( '_AM_WFS_ALTVIEWFILE', '��ʾ' );
define( '_AM_WFS_ALTREFRESH', 'ˢ��' );
define( '_AM_WFS_FILEFILES', '�ļ�' );
define( '_AM_WFS_FILEDIRECTORIES', 'Ŀ¼' );
define( '_AM_WFS_FILENEWFILE', '���ļ�' );
define( '_AM_WFS_FILEMAKEDIR', '��Ŀ¼' );
define( '_AM_WFS_FILEPARENTDIR', '��Ŀ¼' );
define( '_AM_WFS_FILESAVED', '�ļ�����' );
define( '_AM_WFS_FILECREATED', '�ļ�����' );
define( '_AM_WFS_FILENOTCREATED', '�����ļ�δ����' );
define( '_AM_WFS_FILEFOLDERCREATED', '�ļ��д���' );
define( '_AM_WFS_FILEFOLDERNOTCREATED', '�����ļ���δ����' );
define( '_AM_WFS_FILERENAME', '������' );
define( '_AM_WFS_FILERENAMEFILE', '�������ļ���' );
define( '_AM_WFS_FILERENAMEFILEHEAD', '�������ļ�' );
define( '_AM_WFS_FILECHMOD', 'CHMOD�ļ���' );
define( '_AM_WFS_FILECHMODHEAD', 'CHMOD�ļ�' );
define( '_AM_WFS_FILECHMODSAVE', 'CHMOD' );
define( '_AM_WFS_FILEDELETE', 'ɾ��' );
define( '_AM_WFS_FILEDELETEFILE', 'ɾ���ļ�' );
define( '_AM_WFS_FILECANNOTDELFOLDEREMPT', '����ɾ�����ļ��зǿգ�' );
define( '_AM_WFS_FILENOFILEEDIT', 'û���ļ����༭' );
define( '_AM_WFS_ISDELETED', '�ļ�ɾ��' );
define( '_AM_WFS_FILEFOLDERDEL', '�ļ���ɾ��' );
define( '_AM_WFS_FILEINVALIDFILENAME', '��Ч���ļ���' );
define( '_AM_WFS_FILESAFEMODE1', 'Ӧ�ð�ȫģʽ���ƣ���' );
define( '_AM_WFS_FILEUNKWOWN', 'δ֪���󣿣���������ɾ����' );
define( '_AM_WFS_FILENOTDELNOTWRITE', '����ɾ��������д��' );
define( '_AM_WFS_FILESAFEMODE2', '������ȫģʽ���⽫����Filemanager�����⣩' );
define( '_AM_WFS_FILESAFEMODE3', '�رհ�ȫģʽ' );
define( '_AM_WFS_FILEUPLOAD1', '�����ϴ�' );
define( '_AM_WFS_FILEUPLOAD2', '�ر��ϴ�' );
define( '_AM_WFS_FILEUPLOAD3', '����ϴ���С' );
define( '_AM_WFS_FILEREGISTER1', 'Register Globals��' );
define( '_AM_WFS_FILEREGISTER2', 'Register Globals�ر�' );
define( '_AM_WFS_FILERENAMED', '��������' );
define( '_AM_WFS_FILEALREADYEXISTS', '�Ѵ��ڣ�' );
define( '_AM_WFS_FILESAVEAS', '��Ϊ��' );
define( '_AM_WFS_FILEUPLOADEXISTSERVER', '���ϴ����ļ������ڷ�������' );
define( '_AM_WFS_FILEMAXALLOWEDIS', '��������ǣ�' );
define( '_AM_WFS_FILEWIDTH', '��ȣ�' );
define( '_AM_WFS_FILEHEIGHT', '�߶ȣ�' );
define( '_AM_WFS_FILEIMGDIMENS', '�ϴ�ͼƬ��С��' );
define( '_AM_WFS_FILEALLOWIMGDIMENS', '����ͼƬ��С��' );
define( '_AM_WFS_FILENONAMECHOOSEN', 'δѡ�ļ�����ѡ��һ���ϴ��ļ���' );
define( '_AM_WFS_FILEPATHNOTEXIST', '·�������ڣ�<br /> %s' );
define( '_AM_WFS_FILEPATHNOTWRITE', '·������д��<br /> %s' );
define( '_AM_WFS_FILENODIRSEL', 'δѡ��Ŀ¼' );
define( '_AM_WFS_FILEERRFILENOTREN', 'δ֪�����ļ�δ��������' );
define( '_AM_WFS_FILECANNOT', '����' );
define( '_AM_WFS_FILEISNOTWRITABLE', '����д��' );
define( '_AM_WFS_FILEFILE', '�ļ�' );
define( '_AM_WFS_SAFEMODEAPPLY', 'Ӧ�ð�ȫģʽ���ƣ���' );
define( '_AM_WFS_UNKOWNERRORNOTDEL', 'δ֪����δɾ����' );
define( '_AM_WFS_MIMETYPE', 'Mimetype��' );
define( '_AM_WFS_SERVERSTATUS', '������״̬' );
define( '_AM_WFS_SAFEMODEISON', '��ȫģʽ���� ���⽫����Filemanager�����⣩' );
define( '_AM_WFS_SAFEMODEISOFF', '��ȫģʽ�ر�' );
define( '_AM_WFS_UPLOADSON', '�ϴ�����' );
define( '_AM_WFS_UPLOADSOFF', '�ϴ��ر�' );
define( '_AM_WFS_ANDTHEMAX', '����ϴ���С��' );
define( '_AM_WFS_REGISTERON', 'Register Globals����' );
define( '_AM_WFS_REGISTEROFF', 'Register Globals�ر�' );
define( '_AM_WFS_APPROVED', '��׼' );
define( '_AM_WFS_ERROR_APPROVED', '��׼ʱ��������' );
// votedata
define( "_AM_WFS_DLRATINGS", "WF-sections���µ÷� ����ͶƱ��%s��" );
define( "_AM_WFS_REGUSERVOTES", "ע���û�ͶƱ����ͶƱ�� %s��" );
define( "_AM_WFS_ANONUSERVOTES", "�����û�ͶƱ����ͶƱ�� %s��" );
define( "_AM_WFS_USER", "�û�" );
define( "_AM_WFS_IP", "IP��ַ" );
define( "_AM_WFS_USERAVG", "ƽ���û�����" );
define( "_AM_WFS_TOTALRATE", "������" );
define( "_AM_WFS_NOREGVOTES", "���û�ͶƱ" );
define( "_AM_WFS_DATE", "����" );
define( "_AM_WFS_ARTICLE", "������" );
define( "_AM_WFS_RATING", "�÷�" );
define( "_AM_WFS_VOTEDELETED", "ͶƱɾ��" );
// Modify Document
define( "_MD_DLCONF", "��������" );
define( "_MD_USERMODREQ", "�û��޸�����" );
define( "_MD_ORIGINAL", "ԭʼ" );
define( "_MD_PROPOSED", "�����" );
define( "_MD_OWNER", "���ˣ�" );
define( "_MD_NOMODREQ", "û�������޸�����" );
define( "_MD_DESCRIPTIONC", "������" );
define( "_MD_FILEID", "�ļ�ID��" );
define( "_MD_FILETITLE", "���ر��⣺" );
define( "_MD_DLURL", "����URL��" );
define( "_MD_DLURLUPLOAD", "�ϴ��ļ���" );
define( "_MD_HOMEPAGEC", "��ҳ��" );
define( "_MD_VERSIONC", "�汾��" );
define( "_MD_FILESIZEC", "�ļ���С��" );
define( "_MD_NUMBYTES", "%s �ֽ�" );
define( "_MD_PLATFORMC", "ƽ̨��" );
define( "_MD_EMAILC", "Email��" );
define( "_MD_CATEGORYC", "���ࣺ" );
define( "_MD_LASTUPDATEC", "�ϴ��޸ģ�" );
define( "_MD_APPROVE", "���" );
define( "_MD_IGNORE", "����" );
define( "_MD_SUBMITTER", "�ύ�ߣ�" );
define( "_AM_WFS_MOVETOART", "�Ƶ����£����գ����ı䣩" );
// Modified Documents
define( "_AM_WFS_MODIFIED", "�޸�" );
define( "_AM_WFS_ORIGINAL", "ԭʼ����" );
define( "_AM_WFS_AUTHOR", "���ߣ�" );
define( "_AM_WFS_MAINTEXT", "���ģ�" );
define( "_AM_WFS_SUBTITLE", "�ӱ��⣺" );
define( "_AM_WFS_SUMMARY", "������" );
define( "_AM_WFS_URL", "URL��" );
define( "_AM_WFS_URLNAME", "URL����" );
// define("_AM_WFS_SECTION", "���");
define( "_AM_WFS_TITLE1", "���⣺" );
define( "_AM_WFS_PUBLISHEDDATE", "������" );
define( "_AM_WFS_SUMITDATE", "�޸����ڣ�" );
define( "_AM_WFS_PROPOSED", "�޶�����" );
define( "_AM_WFS_POST", "����" );
define( "_AM_WFS_POSTNEWARTICLE", "�༭�޸�����" );
define( "_AM_WFS_WAYSYWTDTTAL2", "ɾ���޸����£�" );
define( "_AM_WFS_MODREQDELETED", "ɾ���޸�����" );
// Admin rights
define( "_AM_WFS_WFsectionADMINRIGHTS", "����Ȩ���ʴ�����" );
// Document Stats
define( "_AM_WFS_ARTICLESTATS", "����ͳ��" );
define( "_AM_WFS_ARTICLESTATSFOR", "���µ�ͳ�ƣ�" );
define( "_AM_WFS_ISLEFT", "��" );
define( "_AM_WFS_ISCENTER", "��" );
define( "_AM_WFS_ISRIGHT", "��" );
define( "_AM_WFS_THISWILLREPLACELINEBREAKS", "(�⽫��break tag�滻linebreaks)" );
define( "_AM_WFS_CREATEARTICLE", "����������" );
define( "_AM_WFS_MODIFYARTICLE", "�޸����£�" );
define( "_AM_WFS_NODETAILSRECORDED", "û��ϸ�ڼ�¼" );
define( "_AM_WFS_ISFOLDER", "�ļ���" );
define( "_AM_WFS_ISCHANGEFOLDER", "�ı��ļ���" );
define( "_AM_WFS_ISRENAMEFILE", "�������ļ�" );
define( "_AM_WFS_ISEDITFILE", "�༭�ļ�" );
define( "_AM_WFS_ISDOWNLOAD", "����" );
define( "_AM_WFS_ISDELFILE", "ɾ���ļ�" );
define( "_AM_WFS_ISVIEWFILE", "����ļ�" );
define( "_AM_WFS_ISHOME", "Home" );
define( "_AM_WFS_ISREFRESH", "ˢ��" );
define( "_AM_WFS_ISADMINNOTICE", "����֪ͨ������Ҫ�������" );
define( "_AM_WFS_ISSORRYMESSAGE", "" );
define( "_AM_WFS_ISSORRYMESSAGE2", "<div><b>Sorry</b>������ <i>%s</i>���ɱ༭��</div><br /><div>�û� %s ��ʱ�ڱ༭���ġ��༭ʼ�ڣ� %s </div>" );
define( "_AM_WFS_STATARTICLEID", "����id��" );
define( "_AM_WFS_STATTITLE", "���⣺" );
define( "_AM_WFS_STATWEIGHT", "Ȩ�أ�" );
define( "_AM_WFS_STATSECTION", "������£�" );
define( "_AM_WFS_STATAUTHOR", "ԭʼ���ߣ�" );
define( "_AM_WFS_STATCREATED", "�����գ�" );
define( "_AM_WFS_STATPUBLISHED", "�����գ�" );
define( "_AM_WFS_STATPUBLISH", "�����գ�" );
define( "_AM_WFS_STATEXPIRED", "������" );
define( "_AM_WFS_STATLASTEDITED", "�ڣ�" );
define( "_AM_WFS_STATLASTEDITEDBY", "���һ�α༭��" );
define( "_AM_WFS_STATTIMESEDITEDBYAUTHOR", "���߱༭�Ĵ�����" );
define( "_AM_WFS_STATTIMESEDITEDBYLASTEDITOR", "������߱༭������" );
define( "_AM_WFS_STATTIMESEDITEDTOTAL", "�ܹ��༭����" );
define( "_AM_WFS_STATCOUNTER", "�����Ķ���" );
define( "_AM_WFS_STATRATING", "���µ÷֣�" );
define( "_AM_WFS_STATRATINGHIGH", "��ߵ÷֣�" );
define( "_AM_WFS_STATRATINGLOW", "��͵÷֣�" );
define( "_AM_WFS_STATVOTES", "ͶƱ������" );
define( "_AM_WFS_STATDOWNLOADS", "��������" );
define( "_AM_WFS_STATCOMMENTSALLOWED", "�������ۣ�" );
define( "_AM_WFS_STATCOMMENTS", "�ܹ����ۣ�" );
define( "_AM_WFS_STATSTATUS", "����״̬��" );
define( "_AM_WFS_RELATEDART", "������¹���" );

define( "_AM_WFS_RELATEDARTADMIN", "���������Ϣ" );
define( "_AM_WFS_RELATEDARTADMINTXT", "������¿�����WF-sections���»��������£�
<br /><li><b>���£�</b>�⽫���㵽����ѡ���б�</li>
<li><b>News:</b>�⽫���㵽��������ѡ���б�</li>
" );

define( "_AM_WFS_RELATEDDOCLIST", "�������ѡ���б�
<br /><li><b>���£�</b>�⽫���㵽����ѡ���б�</li>
<li><b>News:</b>�⽫���㵽��������ѡ���б�</li>
" );

define( "_AM_WFS_RELATEDNEWSLIST", "�����������ѡ���б�" );
define( "_AM_WFS_RELATEDDOCUMENTLIST", "�������ѡ���б�" );

define( "_AM_WFS_RELATEDNEWSLISTTXT", "
<li><b>ID:</b> �г���ID��</li>
<li><b>Title:</b>�⽫��ʾ������ı��⡣</li>
<li><b>Weight:</b>����ÿ����Ŀ����ʾ˳��������Ϊÿ����ָ����ֵ��</li>
<li><b>Add Releted Item:</b>ѡ�л�ȡ�����������Ŀ�б������ӻ�ɾ��һ�</li>
<li><b>Select All/None:</b>�����л��б��</li>
" );

define( "_AM_WFS_RELATEDLINKLIST", "�������ѡ���б�" );
define( "_AM_WFS_RELATEDLINKLISTTXT", "
<li><b>ID:</b>�г���ID��</li>
<li><b>���⣺</b>�⽫��ʾ������ı��⡣</li>
<li><b>Ȩ�أ�</b>����ÿ�����ʾ˳��</li>
<li><b>��������</b>ѡ�л�ȡ�����������Ŀ�б������ӻ�ɾ��һ�</li>
<li><b>Action:</b>ִ���ر�����</li>
" );

define( "_AM_WFS_RELATEDLINKLIST2", "�����������" );
define( "_AM_WFS_RELATEDLINKLISTTXT2", "
<li><b>Releated Link:</b>���ӵ�Url��ַ��</li>
<li><b>Related Link Name:</b>��ʾ�������б��е��Ѻ�����</li>
<li><b>Weight:</b>�����б���ÿ�����ʾ˳��</li>
<li><b>Action:</b>ִ������༭��ɾ����ǰ���ӵ��ر�����</li>
" );

define( "_AM_WFS_NO_DOCS_CREATEDYET", "��û�����´������봴��һЩ�ٳ��ԡ�" );
define( "_AM_WFS_RELATED_DOC", "����" );
define( "_AM_WFS_RELATED_NEWS", "����" );
define( "_AM_WFS_ADDRELATEDART", "�����������" );
define( "_AM_WFS_RELATEDITEM", "���������" );
define( "_AM_WFS_RELATEDART_WEIGHT", "Ȩ��" );
define( "_AM_WFS_ARTID", "ID" );
define( "_AM_WFS_SHOWALL", "ѡ������/None" );
define( "_AM_WFS_FAILTOSEE", "Ok? �������� ��֪��Ϊ��Ҫ����Щ���¿�����ͬһ���ȷʵ�����" );
define( "_AM_WFS_NOARTICLE", "���Ĳ�����" );
define( "_AM_WFS_NOARTICLESSELECTED", "û��ѡ������" );
define( "_AM_WFS_ARTICLESMOVED", "ѡ�е��������Ƶ������" );
define( "_AM_WFS_ANDMOVED", "ͬʱ�Ƶ����" );
define( "_AM_WFS_SELECTALLNONE", "ѡ������/None" );
define( "_AM_WFS_SUBMIT1", "�ύ" );
define( "_AM_WFS_VOTES", "ͶƱ��" );
define( "_AM_WFS_SORTBY1", "����" );
define( "_AM_WFS_DATE1", "����" );
define( "_AM_WFS_ARTICLEID1", "����ID" );
define( "_AM_WFS_POPULARITY1", "�����" );
define( "_AM_WFS_CURSORTBY1", "���µ�ǰ����" );
define( "_AM_WFS_RATING1", "�÷�" );
define( "_AM_WFS_RESET", "����" );
define( "_AM_WFS_NOSUCHSECTION", "<b>����</b>��û�д����" );
define( "_AM_WFS_NOTITLESET", "û�����ñ���" );
define( "_AM_WFS_EDITSUBTITLE", "�����ӱ��⣺<div style='padding-top: 8px;'><span style='font-weight: normal;'>���ֽ��Դ�������������ϲ���</span></div>" );
define( "_AM_WFS_EDITNEWARTTITLE", "������" );
define( "_AM_WFS_EDITWRAPURL", "Wrap�ⲿHTML���£�" );
define( "_AM_WFS_SELECT_IMG", "����ͼƬ��" );
define( "_AM_WFS_TOTALNUMARTS", "�ܼ���������" );
define( "_AM_WFS_STATUSERTYPE", "�����û����ͣ�" );
define( "_AM_WFS_DATEIN", "�༭ʱ��ʼ�ڣ�" );
define( "_AM_WFS_DATEOUT", "�༭ʱ�������" );
define( "_AM_WFS_DOCEDITHISTORY", "���±༭��ʷ" );
define( "_AM_WFS_STILLEDITING", "�Ա༭����" );
define( "_AM_WFS_DOCSINEDITING", "���༭������" );
define( "_AM_WFS_EDITVERSION", "����ʱ�����汾" );
define( "_AM_WFS_EDITVERSIONNUM", "���°汾��" );
define( "_AM_WFS_OTHEROPTIONS", "����ѡ�" );
// wfs_fileshow defines
define( "_AM_WFS_ATTACHEDFILES", "��������" );
define( "_AM_WFS_FILEUPLOAD", "�ϴ��ļ������£�" );
define( "_AM_WFS_ATTACHEDFILEEDITH", "�������ϴ�" );
define( "_AM_WFS_ATTACHFILE", "�ϴ����ļ�" );
define( "_AM_WFS_FILESHOWNAME", "��ʾ���ļ���" );
define( "_AM_WFS_FILEDESCRIPT", "�ļ�����" );
define( "_AM_WFS_FILETEXT", "�ļ���������" );
define( "_AM_WFS_NOT_PUBLISHED", "������" );
define( "_AM_WFS_NOT_SET", "������" );
define( "_AM_WFS_NOT_CHANGED", "���ı�" );
define( "_AM_WFS_TIMES", " ����" );
define( "_AM_WFS_ONLINE", "����" );
define( "_AM_WFS_OFFLINE", "����" );
define( "_AM_WFS_DISPLAYPAGES", "��ʾҳ����" );
define( "_AM_WFS_ARTICLERESTOREHEADING", "���»ظ�����" );
define( "_AM_WFS_ARTICLERESTOREINFO", "���»ظ���Ϣ" );
define( "_AM_WFS_ARTICLERESTORETEXT", "��һ�����ݵľɰ汾�ָ����¡�" );
define( "_AM_WFS_RESTORE_ID", "RID" );
define( "_AM_WFS_RESTORE_DATE", "�ָ�����" );
define( "_AM_WFS_RESTORE_ARTICLEID", "ArID" );
define( "_AM_WFS_RESTORE_TITLE", "�ָ�����" );
define( "_AM_WFS_RESTORE_VERSION", "�汾" );
define( "_AM_WFS_RESTORE_ACTION", "����" );
define( "_AM_WFS_RESTORE_CREATED", "����" );
define( "_AM_WFS_RESTORE_PUBLISHED", "����" );
define( "_AM_WFS_NORESTORE", "�ָ�id������" );
define( "_AM_WFS_NORESTORE_POINTS", "����û�лָ���" );
define( "_AM_WFS_DELETERESTORE", "ɾ�����ָ��㣿" );
define( "_AM_WFS_RESTOREDELETED", "�ָ����ѱ�ɾ����" );
define( "_AM_WFS_ERROR_RESTOREDELETED", "ɾ���ָ���ʱ��������" );
define( "_AM_WFS_FILEEXISTS", "���ļ����ڣ�" );
define( "_AM_WFS_FILEERROR", "����" );
define( "_AM_WFS_FILEERRORPLEASECHECK", "�����ļ���" );
define( "_AM_WFS_NUMBER", " NO: " );
define( "_AM_WFS_ATTACHEDARTICLE", "�ļ����ӵ����£�" );
define( "_AM_WFS_RATINGID", "RID" );
// Uploader
define( "_AM_WFS_FILENOTFOUND", "δ�ҵ��ļ�" );
define( "_AM_WFS_INVALIDFILESIZE", "��Ч�ļ���С��%s �ֽ�" );
define( "_AM_WFS_ERRORUPLOADINGFILE", "û���ļ��ϴ�" );
define( "_AM_WFS_INVALIDCHARCS", "�ļ����е���Ч�ַ�" );
define( "_AM_WFS_FAILEDUPLOADING", "�ϴ�ʧ�ܣ�" );
define( "_AM_WFS_ERRORSRETURNED", "<h4>�ϴ�ʱ���ش���</h4>" );
define( "_AM_WFS_FILESIZEGRTMAX", "��������ļ���С %s (%s)<br />��������ǣ�%s (%s)." );
define( "_AM_WFS_EXTNOTSAME", "�ļ�Mimetype��ƥ���ļ���չ����<br />�ļ�Mimetype�� %s <br />�ļ���չ����%s" );
// Related LINKS
define( "_AM_WFS_RELATEDLINKS", "������ӹ���" );
define( "_AM_WFS_RELATEDLINKSADMIN", "���������Ϣ" );
define( "_AM_WFS_RELATEDLINKSLIST", "��������б�" );
define( "_AM_WFS_ADDRELATEDLINK", "���������������" );
define( "_AM_WFS_RELATED_URL", "�������" );
define( "_AM_WFS_RELATED_URLNAME", "���������" );
define( "_AM_WFS_RELATED_WEIGHT", "Ȩ��" );
define( "_AM_WFS_ID", "ID" );
define( '_AM_WFS_NOURLFOUND', '���������' );
define( '_AM_WFS_DELETERELEATEDLINK', 'ȷʵɾ��������ӣ�' );
define( '_AM_WFS_RELATED_DELETED', '�������ɾ����' );
define( '_AM_WFS_RELATED_DBUPDATED', '������Ӵ���/�޸�' );
// Reviews
define( "_AM_WFS_ADDREVIEW", "����/�޸�����ϸ��" );
define( "_AM_WFS_PUBLISHER", "�����ߣ�" );
define( "_AM_WFS_INTROTEXT", "���ۼ�飺" );
define( "_AM_WFS_GAMEPLAYTEXT", "Gameplay���֣�" );
define( "_AM_WFS_GRAPHICSTEXT", "ͼƬ���֣�" );
define( "_AM_WFS_MUSIC", "�������֣�" );
define( "_AM_WFS_FINALTHOUGHTS", "���" );
define( "_AM_WFS_PLATFORM", "ƽ̨��" );
define( "_AM_WFS_DEVELOPER", "�����ߣ�" );
define( "_AM_WFS_WEBSITE", "�ٷ�Website URL��" );
define( "_AM_WFS_WEBSITEFREINDLY", "�ٷ��Ѻ�վ������" );
define( "_AM_WFS_DIFFICULTY", "�ѵ㣺" );
define( "_AM_WFS_RELEASED", "�����գ�" );
define( "_AM_WFS_GRADING", "�ȼ���" );
define( "_AM_WFS_GENRE", "���ɣ�" );
define( "_AM_WFS_PLAYERS", "��ң�" );
define( "_AM_WFS_PLAYONLINE", "�����棺" );
define( "_AM_WFS_ESRB", "ESRB �÷֣�" );
define( "_AM_WFS_LEARNINGCURVE", "ѧϰ���ߣ�" );
define( "_AM_WFS_GRAPHICS", "ͼ��֣�" );
define( "_AM_WFS_SOUND", "���ַ֣�" );
define( "_AM_WFS_GAMEPLAY", "Gameplay �÷֣�" );
define( "_AM_WFS_CONCEPT", "������Ʒ֣�" );
define( "_AM_WFS_VALUE", "��ֵ��" );
define( "_AM_WFS_TILT", "����Tilt:" );
define( "_AM_WFS_OVERALL", "�ܷ֣�" );
define( "_AM_WFS_CONCLUSION", "���ۣ�" );
define( "_AM_WFS_DISPLAYREVIEW", "��ʾ��������" );
define( "_AM_WFS_ADD_REVIEW", "��������������" );
// Import settings
define( "_AM_WFS_IMPORT", "�������������ļ�" );
define( "_AM_WFS_IMPORTTEXT", "��������HTML���µ�ѡ�����:
<br /><li><b>�����⣺</b>��������������������⡣</li>
<li><b>Ŀ¼�����ļ�����</b>HTML���´�ŵ�Ŀ¼��</li>" );

define( "_AM_WFS_ADD_SETTINGS", "�ı�������������" );
define( "_AM_WFS_IMPORTWORD", "����Word�ļ�" );
define( "_AM_WFS_IMPORTWORDYES", "Com ����/�����ڷ��������ƺ����ܹ�ת��word�ļ���������ʹ�ñ�����ǰҪȷ�����ļ������װ��word��" );
define( "_AM_WFS_IMPORTWORDNO", "Com δ����/�����ڷ�����" );
define( "_AM_WFS_CATEGORYT", "���" );

define( "_AM_WFS_IMPORTWORDINYES", "���ļ�����ƺ���װ��MS Word�������ƿ���ת��һ��word�ļ���" );
define( "_AM_WFS_IMPORTWORDINNO", "MS Wordδ����/��װ�����ļ������" );
/**
 * Check for word
 */
define( "_AM_WFS_IMPORTWORDTXT", "����Word����У�飺");
define( "_AM_WFS_IMPORTCOMENABLED", "Com���ã�");
define( "_AM_WFS_IMPORTWORDINSTALL", "MS Word��װ��");
define( "_AM_WFS_IMPORTWORDSELECT", "<b>ѡ��Word�ļ���</b>ѡ��һ���ϴ������Word�ļ���");
define( "_AM_WFS_WORDNOTINSTALLED", "���ķ�����������������ת��MS Word�ļ�������" );

define( "_AM_WFS_IMPORTPDF", "����PDF�ļ�" );
define( "_AM_WFS_IMPORTPDFSELECT", "<b>ѡ��PDF�ļ���</b>ѡ��һ��PDF�ļ��ϴ����롣");
define( "_AM_WFS_EDITPDFBROWSE", "ѡ��PDF�ļ�" );
define( "_AM_WFS_EDITPDFFILE", "2a. PDF�ļ���<div style='padding-top: 8px;'><span style='font-weight: normal;'>���Ľ���Ϊҳ������ġ�</span></div>" );

define( "_AM_WFS_EDITDRAFT", "��Ϊ�ݸ壿" );
define( "_AM_WFS_IMPORT_DIRNAME", "Ŀ¼�����ļ���" );
define( "_AM_WFS_IMPORT_HTMLPROC", "����HTML�ļ�" );
define( "_AM_WFS_IMPORT_EXTFILTER", "�ⲿɸѡ��������" );
define( "_AM_WFS_IMPORT_BODY", "����HTML�ļ���" );
define( "_AM_WFS_IMPORT_INDEXHTML", "ɾ����index.html�����ӣ��ڱ�Ŀ¼���ϼ�Ŀ¼���С�" );
define( "_AM_WFS_IMPORT_LINK", "�ı�һ������������� = �ļ���" );
define( "_AM_WFS_IMPORT_IMAGE", "�ı�ͼƬ�ļ������ӵ�ͼƬĿ¼��" );
define( "_AM_WFS_IMPORT_ATMARK", "�ı� @ �� &amp;#064;" );
define( "_AM_WFS_IMPORT_TEXTPROC", "�����ı��ļ�" );
define( "_AM_WFS_IMPORT_TEXTPRE", "�� &lt;pre&gt; &lt;/pre&gt;��Χ�ı��ļ�" );
define( "_AM_WFS_IMPORT_IMAGEPROC", "ͼƬ�ļ�����" );
define( "_AM_WFS_IMPORT_IMAGEDIR", "ͼƬĿ¼��" );
define( "_AM_WFS_IMPORT_IMAGECOPY", "����ͼƬ�ļ���ͼƬĿ¼��" );
define( "_AM_WFS_IMPORT_TESTMODE", "����ģʽ" );
define( "_AM_WFS_IMPORT_TESTDB", "���浽���ݿ⡣����ʱ��ȥ��һ��ѡ����" );
define( "_AM_WFS_IMPORT_TESTEXEC", "����" );
define( "_AM_WFS_IMPORT_TESTTEXT", "������ʾ" );
define( "_AM_WFS_IMPORT_EXPLANE", "�����ļ���չ���ж����͡�<br>HTML�ļ���html��htm��չ����<br>T�ı��ļ���txt��չ����<br>ͼƬ�ļ���gif��jpg��jpeg��png��չ����<br>" );
define( "_AM_WFS_IMPORT_ERRDIREXI", "Ŀ¼���ļ�������" );
define( "_AM_WFS_IMPORT_ERRFILEXI", "ɸѡ���򲻴���" );
define( "_AM_WFS_IMPORT_ERRFILEXEC", "ɸѡ���򲻿�ִ��" );
define( "_AM_WFS_IMPORT_ERRNOCOPY", "δָ��ͼƬ����" );
define( "_AM_WFS_IMPORT_ERRNOIMGDIR", "δָ��ͼƬĿ¼" );
define( "_AM_WFS_IMPORT_ERRIMGDIREXI", "ָ����ͼƬĿ¼����Ŀ¼" );
define( "_AM_WFS_IMPORT_ERRFILEEXI", "�ļ�������" );
define( "_AM_WFS_ARTRESTORENOTACT", "�˹�����δ���" );
define( "_AM_WFS_ERRORFILEALLREADYEXISITS", "�ļ����ڷ������ϴ��ڡ�" );
// define("_AM_WFS_RELATEDARTS", "��������б�");
// define("_AM_WFS_RELATEDNEWS", "��������б�");
define( "_AM_WFS_ATTACHEDFILESADMIN", "�༭��������" );
define( "_AM_WFS_ATTACHEDFILEPREVIEW", "�ļ�Ԥ��" );
define( "_AM_WFS_ATTACHEDFILESTAS", "�ļ�ͳ��" );
define( "_AM_WFS_ATTACHEDFILEEDIT", "�ļ��༭" );
define( "_AM_WFS_ATTACHEDFILEACCESS", "������ʣ�" );
// Document Spotlight
define( "_AM_WFS_DOCSPOTLIGHTHEADING", "���½������" );
define( "_AM_WFS_DOCSPOTLIGHTINFO", "���½�����Ϣ" );
define( "_AM_WFS_DOCSPOTLIGHTTEXT", "����������ʾ�ڽ������飺
<li>����ͼƬSpotlight Image</li>
<li>����ͼƬ�����</li>
<li>����ͼƬ���߶�</li>
<li>����ͼƬ��󳤶�</li>
<li>��Ҫ��������</li>
<li>�������£���ʹ��������»�ѡ��һƪ</li>
" );
define( "_AM_WFS_DOCSPOTLIGHTFORM", "�����" );
define( "_AM_WFS_DOCSPOTLIGHTDOC", "�������£�" );
define( "_AM_WFS_DOCSPOTLIGHTIMAGE", "����Ԥ����" );
define( "_AM_WFS_USE_LASTPUBLISHED", " ʹ������������£�" );
define( "_AM_WFS_CURRENT_SPOT", "��ǰ�������£�" );
define( "_AM_WFS_OTHERWISE_CHOOSEANARTICLE", "������ѡ��һƪ����" );
define( "_AM_WFS_SPOTIT", "ѡ��" ); // select it as spotlight document
define( "_AM_WFS_SPOTIMAGE_MAXWIDTH", "��󽹵�ͼƬ��ȣ�" );
define( "_AM_WFS_SPOTIMAGE_MAXHEIGHT", "��󽹵�ͼƬ�߶ȣ�" );
define( "_AM_WFS_SPOTDOCUMENT_MAXLENGTH", "��󽹵��ı������ȣ�<div style='padding-top: 8px;'><span style='font-weight: normal;'>���ֶ�����/��ĸ��0������ԭ�г��ȡ�</span></div>" );
define( "_AM_WFS_SPOTDOCUMENT_SUMTYPE", "��Ҫ�������ͣ�" );
define( "_AM_WFS_SPOTDOCUMENT_SUBTITLE", "�����ӱ���" );
define( "_AM_WFS_SPOTDOCUMENT_SUMMARY", "���¸�Ҫ" );
define( "_AM_WFS_SPOTDOCUMENT_MAINTEXT", "��������" );
// index.php
define( "_AM_WFS_ARTICLENOTEXIST", "�������²�����" );
define( "_AM_WFS_NOT_WORDDOC", "�����ⲻ��һ��MS WORD�ļ�" );
define( "_AM_WFS_NO_FORUM", "δѡ����̳" );
define( "_AM_WFS_CHECKIN_FAILED", "�ļ�Checkinʧ��" );
define( "_AM_WFS_SERVERSTATS", "������״̬" );
define( "_AM_WFS_SPHPINI", "<b>����PHP ini�ļ�����Ϣ��</b>" );
define( "_AM_WFS_SAFEMODESTATUS", "��ȫģʽ״̬��" );
define( "_AM_WFS_REGISTERGLOBALS", "Register Globals: " );
define( "_AM_WFS_MAGICQUOTESGPC", "Magic_quotes State For GPC : " );
define( "_AM_WFS_SERVERUPLOADSTATUS", "Server�ϴ�״̬��" );
define( "_AM_WFS_MAXUPLOADSIZE", "���������ϴ���С��" );
define( "_AM_WFS_MAXPOSTSIZE", "��������Ͷ�ݴ�С��" );
define( "_AM_WFS_SAFEMODEPROBLEMS", " ������������⣩" );
define( "_AM_WFS_GDLIBSTATUS", "GD ��֧�֣�" );
define( "_AM_WFS_GDLIBVERSION", "GD ��汾��" );
define( "_AM_WFS_GDON", "<b>����</b> ����������ͼ��" );
define( "_AM_WFS_GDOFF", "<b>����</b> ��������ͼ��" );
define( "_AM_WFS_OFF", "<b>�ر�</b>" );
define( "_AM_WFS_ON", "<b>����</b>" );
define( "_AM_WFS_ZLIBCOMPRESSION", "ZLibѹ����" );
define( "_AM_WFS_MAXINPUTTIME", "������������" );
define( "_AM_WFS_FOPENURL", "FOpen URL��" );

define( "_AM_WFS_EXT", "��չ����" );
define( "_AM_WFS_UPDATEDATE", "�ϴ��޸ģ�" );
define( "_AM_WFS_DOWNLOADNAME", "��������" );
define( "_AM_WFS_FILEREALNAME", "��������" );
define( "_AM_WFS_ARTICLEID", "����ID��" );
define( "_AM_WFS_DESCRIPTION", "�ļ�����" );
define( "_AM_WFS_NODESCRIPT", "�ļ���������" );
define( "_AM_WFS_ERRORCHECK", "�ļ�У�飺" );
define( "_AM_WFS_ADD_STATUS", "�������״̬" );
define( "_AM_WFS_FILEPERMISSION", "����Ȩ�ޣ�" );
define( "_AM_WFS_DOWNLOADED", "���ش�����" );
define( "_AM_WFS_DOWNLOADSIZE", "���ش�С��" );
define( "_AM_WFS_LASTACCESS", "�ϴη����գ�" );
define( "_AM_WFS_LASTUPDATED", "�ϴ��޸��ڣ�" );
define( "_AM_WFS_DEL", "ɾ��" );
// Mimetypes
define( "_AM_WFS_MMIMETYPES", "Mimetypes����" );
define( "_AM_WFS_MIME_ID", "ID" );
define( "_AM_WFS_MIME_EXT", "EXT" );
define( "_AM_WFS_MIME_NAME", "Ӧ������" );
define( "_AM_WFS_MIME_ADMIN", "����Ա" );
define( "_AM_WFS_MIME_USER", "�û�" );
// Mimetype Form
define( "_AM_WFS_MIME_CREATEF", "����Mimetype" );
define( "_AM_WFS_MIME_MODIFYF", "�޸�Mimetype" );
define( "_AM_WFS_MIME_EXTF", "�ļ���չ����" );
define( "_AM_WFS_MIME_NAMEF", "Ӧ������/����<div style='padding-top: 8px;'><span style='font-weight: normal;'>��������ڴ���չ����Ӧ�á�</span></div>" );
define( "_AM_WFS_MIME_TYPEF", "Mimetypes:<div style='padding-top: 8px;'><span style='font-weight: normal;'>����ÿ�������ڴ��ļ���չ����mimetype��ÿ��mimetype�����ɿո�ָ���</span></div>" );
define( "_AM_WFS_MIME_ADMINF", "�������ԱMimetype" );
define( "_AM_WFS_MIME_ADMINFINFO", "<b>�����ڹ���Ա�ϴ���Mimetypes��</b>" );
define( "_AM_WFS_MIME_USERF", "�����û�Mimetype" );
define( "_AM_WFS_MIME_USERFINFO", "<b>�������û��ϴ���Mimetypes��</b>" );
define( "_AM_WFS_MIME_NOMIMEINFO", "û��ѡ��mimetypes��" );
define( "_AM_WFS_MIME_FINDMIMETYPE", "������Mimetype��" );
define( "_AM_WFS_MIME_EXTFIND", "�����ļ���չ����<div style='padding-top: 8px;'><span style='font-weight: normal;'>���������������ļ���չ����</span></div>" );
define( "_AM_WFS_MIME_INFOTEXT", "<ul><li>��mimetypes����ͨ���˱���ر��������༭��ɾ����</li>
	<li>ͨ���ⲿվ��������mimetypes��</li>
	<li>�������Ա���û��ϴ�mimetypes��</li>
	<li>�ı�mimetype�ϴ�״̬��</li></ul>
	" );
// Mimetype Buttons
define( "_AM_WFS_MIME_CREATE", "����" );
define( "_AM_WFS_MIME_CLEAR", "����" );
define( "_AM_WFS_MIME_CANCEL", "ȡ��" );
define( "_AM_WFS_MIME_MODIFY", "�޸�" );
define( "_AM_WFS_MIME_DELETE", "ɾ��" );
define( "_AM_WFS_MIME_FINDIT", "ȡ��չ����" );
// Mimetype Database
define( "_AM_WFS_MIME_DELETETHIS", "ɾ��ѡ����Mimetype��" );
define( "_AM_WFS_MIME_MIMEDELETED", "Mimetype %s ��ɾ��" );
define( "_AM_WFS_MIME_CREATED", "Mimetype��Ϣ����" );
define( "_AM_WFS_MIME_MODIFIED", "Mimetype��Ϣ�޸�" );

define( "_AM_WFS_GL_WEIGHTON", "<br />�����ۺ�Ȩ��" );
define( "_AM_WFS_GL_WEIGHTOFF", "<br />�����ۺ�Ȩ��" );
define( "_AM_WFS_DOCUMENTTYPES", "�����ֲ�ͬ����������ѡ���������ġ�<br />���ѡ���˳���һ���������ͣ���ô������ʾ�����ȼ��ġ���1 = ��ߣ�" );
define( "_AM_WFS_DOCUMENTTYPE", "<b>��������</b>" );
define( "_AM_WFS_BIGUESER", "����Big5�û�ON" );

?>
